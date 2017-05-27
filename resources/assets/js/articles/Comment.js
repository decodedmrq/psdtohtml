import React from 'react';
class Comment extends React.Component {
    constructor() {
        super();
        this.state = {
            data: {
                body: '',
                name: '',
                email: '',
            },
            errors: [],
        };
    }

    changeBody(event) {
        let {data} = this.state;
        data.body = event.target.textContent;
        this.validateRequire('body', event.target.textContent);
        this.setState({
            data,
        });
    }

    changeName(event) {
        let {data} = this.state;
        data.name = event.target.value;
        this.validateRequire('name', event.target.value);
        this.setState({
            data,
        });
    }

    changeEmail(event) {
        let {data} = this.state;
        data.email = event.target.value;
        this.validateRequire('email', event.target.value);
        this.validateEmail('email', event.target.value);
        this.setState({
            data,
        });
    }

    validateRequire(field, value) {
        let {errors} = this.state;
        let errorIndex = errors.findIndex(error => error.field === field);
        if (value === '') {
            let error = {field: field, msg: trans(`messages.${field}_cant_empty`)};
            if (errorIndex === -1) {
                errors.push(error);
            } else {
                errors[errorIndex] = error;
            }
        } else if (errorIndex !== -1) {
            errors = errors.filter(error => error.field !== field);
            console.log(errors);
        }
        this.setState({errors});
    }

    validateEmail(field, value) {
        let {errors} = this.state;
        let errorIndex = errors.findIndex(error => error.field === field);
        let regexEmail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (!regexEmail.test(value)) {
            let error = {field: field, msg: trans(`messages.${field}_is_not_an_email_address`)};
            if (errorIndex === -1) {
                errors.push(error);
            } else {
                errors[errorIndex] = error;
            }
        } else if (errorIndex !== -1) {
            errors = errors.filter(error => error.field !== field);
        }
        this.setState({errors});
    }

    submitComment(event) {
        event.preventDefault();
        let {data} = this.state;
        this.validateRequire('name', data.name);
        this.validateRequire('email', data.email);
        this.validateEmail('email', data.email);
        this.validateRequire('body', data.body);
    }

    getInputClassName(field) {
        let {errors} = this.state;
        let errorIndex = errors.findIndex(error => error.field === field);
        if (errorIndex === -1) return '';

        return ' red-border';
    }

    render() {
        return (
            <div id="comment" className="article-comment">
                <div
                    placeholder={trans('string.enter_comment')}
                    onKeyUp={this.changeBody.bind(this)}
                    className={'body' + this.getInputClassName('body')} contentEditable={true}/>
                <div className="row">
                    <div className="col-md-6">
                        <input
                            onChange={this.changeName.bind(this)} type="text" placeholder={trans('string.first_and_last_name')}
                            className={"form-control" + this.getInputClassName('name')}/>
                    </div>
                    <div className="col-md-6">
                        <input
                            onChange={this.changeEmail.bind(this)} type="text"
                            placeholder="Email" className={"form-control" + this.getInputClassName('email')}/>
                    </div>
                    <div className="col-md-6 offset-md-6">
                        <button
                            role="button"
                            onClick={this.submitComment.bind(this)}
                            className="btn btn-secondary btn-send-comment btn-block">{trans('string.send_comment')}</button>
                    </div>
                </div>
            </div>
        );
    }
}
export default Comment;