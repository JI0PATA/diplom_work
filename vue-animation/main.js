let app = new Vue({
    el: "#app",
    data: {
        page: 'screen-1',
        animations: {}
    },
    computed: {

    },
    methods: {
        changeScreen(screenName) {

            

        },

        doAnimation(name, duration) {

        },
        startAnimation(name) {
            this.$set(this.animations, name, true);
        },
        stopAnimation(name) {
            this.animations[name] = false;
        },
        animation(name) {
            return this.animations[name] ? `animation animation-${name}` : '';
        }
    }
});