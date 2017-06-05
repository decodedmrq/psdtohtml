import React from 'react';
import ReactDOM from 'react-dom';
import Comment from './Comment';
import routes from '../components/routes';
class News extends React.Component {
    constructor() {
        super();
        this.state = {
            news: news,
        }
    }

    share(event) {
        event.preventDefault();
        FB.ui({
            method: 'share',
            display: 'popup',
            href: window.location.href,
        }, function (response) {
        });
    }

    like(news, event) {
        event.preventDefault();
    }

    getLikeClassName(news) {
        if (news.is_like) {
            return 'action-item active';
        }

        return 'action-item';
    }

    render() {
        return (
            <div>
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
                    <div className="card-footer actions">
                        <div className={this.getLikeClassName(this.state.news)}>
                            <a onClick={this.like.bind(this)} href="#">
                                <i className="fa fa-thumbs-up" aria-hidden="true"/> {trans('string.like')}
                            </a>
                        </div>
                        <div className="action-item">
                            <a href="#comment">
                                <i className="fa fa-comment" aria-hidden="true"/> {trans('string.comment')}
                            </a>
                        </div>
                        <div className="action-item">
                            <a onClick={this.share.bind(this)} href="#">
                                <i className="fa fa-share" aria-hidden="true"/> {trans('string.share')}
                            </a>
                        </div>
                    </div>
                    <Comment/>
                </div>
            </div>
        )
    }
}

ReactDOM.render(
    <News/>,
    document.getElementById('news'),
);