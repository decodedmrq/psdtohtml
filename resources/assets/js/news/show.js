import React from 'react';
import ReactDOM from 'react-dom';
import routes from '../components/routes';
import Related from "./Related";
class News extends React.Component {
    constructor() {
        super();
        this.state = {
            news: news,
            isLoading: false,
        }
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
            <div className="show-news">
                <div className="search hidden-sm-up">
                    <form>
                        <input placeholder={trans('string.search_3_dot')} type="text" name="keyword"
                               className="form-control"/>
                        <input type="submit" value=""/>
                    </form>
                </div>
                <div className="card article-item">
                    <div className="card-block">
                        <h2><a href="#"
                               className="card-title article-title">{this.state.news.title}</a></h2>
                        <div className="article-meta">
                            <div className="time meta-item">{this.state.news.updated_at}</div>
                            <div className="tag meta-item">
                                <div className="tag-item">
                                    {news.tagged.map((tag, index) => {
                                        return (
                                            <div key={index} className="tag-item">
                                                <a href={routes.category.show(tag.tag_slug)}>{tag.tag_name}</a>
                                            </div>
                                        )
                                    })}
                                </div>
                            </div>
                        </div>
                        <div dangerouslySetInnerHTML={{__html: this.state.news.content}} className="card-text article-content"/>
                    </div>
                    <Related news={this.state.news}/>
                </div>
                <div className="card article-item mt-1">
                    <div className="newsletter-bottom text-center">
                        <div className="mt-4 mb-3">Đăng ký Email để nhận bài viết mới nhất</div>
                        <div className="sidebar-head-text">{this.state.message}</div>
                        <div className="row mb-4 mx-0">
                            <div className="col-xl-2"/>
                            <div className="col-xl-8">
                                <form onSubmit={this.submit.bind(this)} method="post" className="subscribe">
                                    <input type="text" className="email" placeholder="Nhập email của bạn" ref="email" name="email"/>
                                    <button type="submit" className="button-subscribe">
                                        <i className="fa fa-angle-right" aria-hidden="true"/>
                                    </button>
                                </form>
                            </div>
                            <div className="col-xl-2"/>
                        </div>
                    </div>
                </div>
                <div className="card article-item mt-1">
                    <div className="article-comment">
                        <div className="fb-comments" data-width="100%" data-numposts="5"/>
                    </div>
                </div>
            </div>
        )
    }
}

ReactDOM.render(
    <News/>,
    document.getElementById('news'),
);