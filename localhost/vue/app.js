// register modal component


Vue.component("modal", {
        template: "#modal-template"
      });
      
      // start app
      new Vue({
        el: "#app-0",
        data: {
          showModal: false,
          status: true
        },  
        computed: {
          className: function() {
             if(this.status == true) {
                return 'green'
             } else {
                return 'red'
             }
          }
       }
});
Vue.component("modal", {
        template: "#modal-template"
      });
      
      // start app
      new Vue({
        el: "#app-1",
        data: {
          showModal: false,
          status: true
        },  
        computed: {
          className: function() {
             if(this.status == true) {
                return 'green'
             } else {
                return 'red'
             }
          }
       }
});
Vue.component("modal", {
        template: "#modal-template"
      });
      
      // start app
      new Vue({
        el: "#app-2",
        data: {
          showModal: false,
          status: true
        },  
        computed: {
          className: function() {
             if(this.status == true) {
                return 'green'
             } else {
                return 'red'
             }
          }
       }
});
Vue.component("modal", {
        template: "#modal-template"
      });
      
      // start app
      new Vue({
        el: "#app-3",
        data: {
          showModal: false,
          status: true
        },  
        computed: {
          className: function() {
             if(this.status == true) {
                return 'green'
             } else {
                return 'red'
             }
          }
       }
});

 /* // import Swiper core and required modules
  import { Navigation, Pagination, Scrollbar, A11y } from '../node_modules/swiper';

  // Import Swiper Vue.js components
  import { Swiper, SwiperSlide } from '../node_modules/swiper';

  // Import Swiper styles
  import 'swiper/css';
  import 'swiper/css/navigation';
  import 'swiper/css/pagination';
  import 'swiper/css/scrollbar';

  // Import Swiper styles
  export default {
    components: {
      Swiper,
      SwiperSlide,
    },
    setup() {
      const onSwiper = (swiper) => {
        console.log(swiper);
      };
      const onSlideChange = () => {
        console.log('slide change');~
      };
      return {
        onSwiper,
        onSlideChange,
        modules: [Navigation, Pagination, Scrollbar, A11y],
      };
    },
  }; */