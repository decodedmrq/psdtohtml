module.exports = {
    article: {
        show(alias) {
            return '/article/' + alias;
        },
        load: '/article/load',
    }
};