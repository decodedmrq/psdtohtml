import React from 'react';
import ReactDOM from 'react-dom';
import routes from '../components/routes';
class News extends React.Component {
    constructor() {
        super();
        this.state = {
            isLoading: true,
            isLoadingMore: false,
            news: {
                data: [],
            },
        }
    }

    componentWillMount() {
        axios.get(routes.news.load, {
            params: {
                keyword: keyword,
            }
        }).then((response) => {
            this.setState({
                news: response.data,
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
        let {news} = this.state;
        if (news.current_page >= news.last_page || this.state.isLoadingMore) {
            return;
        }
        this.setState({
            isLoadingMore: true,
        });
        axios.get(news.next_page_url, {
            params: {
                keyword: keyword,
            }
        }).then((response) => {
            let data = news.data.concat(response.data.data);
            news = response.data;
            news.data = data;
            this.setState({
                news,
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
        let {news} = this.state;
        if (news.current_page >= news.last_page) return;

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

                {this.state.news.data.map((item, index) => {
                    return (
                        <div key={index} className="card article-item">
                            <div className="row">
                                <div className="thumbnail col-md-4 pl-0">
                                    <img className="card-img-top img-responsive w-100" src={item.small_thumbnail}/>
                                </div>
                                <div className="card-block col-md-8 pl-0">
                                    <h2><a href={routes.news.show(item.slug)}
                                           className="card-title article-title">{item.title}</a></h2>
                                    <div className="article-meta">
                                        <div className="time meta-item">{item.updated_at}</div>
                                        <div className="tag meta-item">
                                            {item.tagged.map((tag, index) => {
                                                return <div key={index} className="tag-item"><a href="#">{tag.tag_name}</a></div>
                                            })}
                                        </div>
                                    </div>
                                    <p dangerouslySetInnerHTML={{__html: item.description}}
                                       className="card-text article-description"/>
                                    <div className="readmore float-right">
                                        <a href={routes.news.show(item.slug)}>
                                            {trans('string.readmore')}
                                            <i className="fa fa-long-arrow-right" aria-hidden="true"/>
                                        </a>
                                    </div>
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
    <News/>,
    document.getElementById('news'),
);