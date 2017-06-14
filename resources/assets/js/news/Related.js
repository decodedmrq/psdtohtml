import React from 'react';
import routes from '../components/routes';
class Related extends React.Component {
    constructor() {
        super();
        this.state = {
            items: [],
            isLoading: true,
        }
    }

    componentDidMount() {
        axios.get(routes.news.related, {
            params: {
                id: this.props.news.id,
            }
        }).then((response) => {
            this.setState({
                items: response.data,
                isLoading: false,
            });
        }).catch((error) => {
            console.log(error);
        });
    }

    render() {
        if (this.state.isLoading || !this.state.items.length) {
            return <div/>;
        }

        return (
            <div className="related-news">
                <h3 className="related-title">{trans('string.related_news')}</h3>
                <div className="related-item">
                    {this.state.items.map((news, index) => {
                        return (
                            <div key={index} className="mb-1">
                                <i className="fa fa-angle-double-right" aria-hidden="true"/>
                                <a href={routes.news.show(news.slug)}>{news.title}</a>
                            </div>
                        );
                    })}
                </div>
            </div>
        );
    }
}

Related.defaultProps = {
    news: {},
};

export default Related;