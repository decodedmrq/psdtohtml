import React from 'react';
import ReactDOM from 'react-dom';
import Comment from './Comment';
import routes from '../components/routes';
class Article extends React.Component {
    constructor() {
        super();
        this.state = {
            article: article,
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

    like(article, event) {
        event.preventDefault();
    }

    getLikeClassName(article) {
        if(article.is_like) {
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
                    <img className="card-img-top img-responsive" src={this.state.article.cover_image}/>
                    <div className="card-block">
                        <h2><a href={routes.article.show(this.state.article.alias)}
                               className="card-title article-title">{this.state.article.title}</a></h2>
                        <div className="article-meta">
                            <div className="time meta-item">{this.state.article.updated_at}</div>
                            <div className="tag meta-item">
                                <div className="tag-item"><a href="#">{this.state.article.category.name}</a></div>
                            </div>
                        </div>
                        <p className="card-text article-description">{this.state.article.content}</p>
                    </div>
                    <div className="card-footer actions">
                        <div className={this.getLikeClassName(this.state.article)}>
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
    <Article/>,
    document.getElementById('articles'),
);