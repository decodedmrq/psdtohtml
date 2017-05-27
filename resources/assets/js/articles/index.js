import React from 'react';
import ReactDOM from 'react-dom';
import routes from '../components/routes';
class Article extends React.Component {
    constructor() {
        super();
        this.state = {
            isLoading: true,
            isLoadingMore: false,
            articles: {
                data: [],
            },
        }
    }

    componentWillMount() {
        axios.get(routes.article.load).then((response) => {
            this.setState({
                articles: response.data,
                isLoading: false,
            });
        }).catch((error) => {
            console.log(error);
            this.setState({
                isLoading: false,
            });
        });
    }

    loadMore(event) {
        event.preventDefault();
        let {articles} = this.state;
        if (articles.current_page >= articles.last_page || this.state.isLoadingMore) {
            return;
        }
        this.setState({
            isLoadingMore: true,
        });
        axios.get(articles.next_page_url).then((response) => {
            let data = articles.data.concat(response.data.data);
            articles = response.data;
            articles.data = data;
            this.setState({
                articles,
                isLoadingMore: false,
            });
        }).catch((error) => {
            console.log(error);
            this.setState({
                isLoadingMore: false,
            });
        });
    }

    getLoadMoreButton() {
        let {articles} = this.state;
        if (articles.current_page >= articles.last_page) return;

        return (
            <div className="row">
                <div onClick={this.loadMore.bind(this)} className="loadmore col-md-6 offset-md-3">
                    {trans('string.loadmore')}
                </div>
            </div>
        );
    }

    render() {
        if (this.state.isLoading) {
            return (
                <div></div>
            );
        }
        return (
            <div>
                <div className="search hidden-sm-up">
                    <form>
                        <input placeholder={trans('string.search_3_dot')} type="text" name="keyword"
                               className="form-control"/>
                        <input type="submit" value=""/>
                    </form>
                </div>

                {this.state.articles.data.map((article, index) => {
                    return (
                        <div key={index} className="card article-item">
                            <img className="card-img-top img-responsive" src={article.cover_image}/>
                            <div className="card-block">
                                <h2><a href={routes.article.show(article.alias)}
                                       className="card-title article-title">{article.title}</a></h2>
                                <div className="article-meta">
                                    <div className="time meta-item">{article.updated_at}</div>
                                    <div className="tag meta-item">
                                        <div className="tag-item"><a href="#">{article.category.name}</a></div>
                                    </div>
                                </div>
                                <p className="card-text article-description">{article.short_description}</p>
                                <div className="readmore">
                                    <a href={routes.article.show(article.alias)}>
                                        {trans('string.readmore')}
                                        <i className="fa fa-long-arrow-right" aria-hidden="true"/>
                                    </a>
                                </div>
                            </div>
                        </div>
                    );
                })}

                {this.getLoadMoreButton()}
            </div>
        )
    }
}

ReactDOM.render(
    <Article/>,
    document.getElementById('articles'),
);