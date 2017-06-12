import React from 'react';
import ReactDOM from 'react-dom';
import routes from '../components/routes';
class Subscribe extends React.Component {
    constructor() {
        super();
        this.state = {
            isLoading: false,
            message: trans('string.subscribe_description'),
        };
    }

    submit(event) {
        event.preventDefault();
        if (this.state.isLoading) return;
        this.setState({
            isLoading: true,
        });
        axios.post(routes.newsletter.store, {email: this.refs.email.value.trim()}).then((response) => {
            this.setState({
                message: response.data.message,
                isLoading: false,
            }, () => this.refs.email.focus());
        }).catch((error) => {
            this.setState({
                message: error.response.data.email[0],
                isLoading: false,
            }, () => this.refs.email.focus());
        });
    }

    getSubmitButton() {
        if (this.state.isLoading) {
            return <img src="/images/loading.gif"/>;
        }

        return <i className="fa fa-long-arrow-right" aria-hidden="true"/>;
    }

    render() {
        return (
            <div>
                <div className="card-header">
                    {trans('string.subscribe_for_article') }
                    <div className="sidebar-head-text">{this.state.message}</div>
                </div>
                <div className="card-block">
                    <form onSubmit={this.submit.bind(this)} className="subscribe" method="post">
                        <input placeholder={trans('string.enter_email_three_dot')} type="text" ref="email" name="email"
                               className="form-control"/>
                        <button type="submit" className="button-subscribe">
                            {this.getSubmitButton()}
                        </button>
                    </form>
                </div>
            </div>

        )
    }
}

ReactDOM.render(
    <Subscribe/>,
    document.getElementById('subscribe'),
);