module.exports = {
    news: {
        show(slug) {
            return '/blog/' + slug;
        },
        load: '/news/load',
    },
    guest: {
        store: '/guest',
    },
    category: {
        show(slug) {
            return '/category/' + slug;
        },
        load_news(slug) {
            return `/category/${slug}/load_news`;
        }
    }
};