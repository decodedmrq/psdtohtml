module.exports = {
    news: {
        show(alias) {
            return '/news/' + alias;
        },
        load: '/news/load',
    },
    guest: {
        store: '/guest',
    },
};