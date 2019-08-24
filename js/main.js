let app = new Vue({
    el: '#app',
    data: {
        page: 'events',
        selectedEvent: null,
        creatingEvent: { id: null, title: null },
        events: [
            { id: 1, title: 'event 1' },
            { id: 2, title: 'event 2' },
            { id: 3, title: 'event 3' },
            { id: 4, title: 'event 4' },
        ]
    },
    created() {
        // let hasRoutes = {
        //     "": () => { this.page = 'events' },
        //     "/event\d+/": () => { this.page = 'event'; this.selectEvent = }
        // };

        window.onpopstate = this.parseURL;
        this.parseURL();
    },
    methods: {
        parseURL() {
            let page = location.hash.match(/page=(\w+)/);

            if(!page) {
                this.page = 'events';
                return;
            }
            
            this.page = page[1];

            if(this.page === 'event') {
                this.selectedEvent = this.events.find(ev => ev.id == location.hash.match(/id=(\d+)/)[1]);
            }
        },
        selectEvent(ev) {
            this.selectedEvent = ev;

            this.changePage('event');
            location.hash = `page=event&id=${ev.id}`;
            // history.pushState({
            //     page: 'event'
            // }, 'event', `event/${ev.id}`);
        },
        addEvent() {
            this.changePage('add_event');
            location.hash = `page=add_event`;
        },
        changePage(page) {
            this.page = page;
        },
        createEvent() {
            this.events.push(Object.assign({}, this.creatingEvent));

            // history.back();
            this.page = 'events';
            location.hash = "";
        }
    },
});