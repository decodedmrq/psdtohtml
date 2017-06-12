import React from 'react';
import ReactDOM from 'react-dom';
import routes from '../components/routes';
import Related from "./Related";
class News extends React.Component {
    constructor() {
        super();
        this.state = {
            news: news,
        }
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
                        <div className="row mb-4">
                            <div className="col-xl-2"/>
                            <div className="col-xl-8">
                                <input type="text" className="email" placeholder="Nhập email của bạn"/>
                            </div>
                            <div className="col-xl-2"/>
                        </div>
                    </div>
                </div>
                <div className="card article-item mt-1">
                    <div className="article-comment">
                        <div className="fb-comments" data-href="https://www.facebook.com/nhantuongsee/" data-width="100%"
                             data-numposts="5"/>
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