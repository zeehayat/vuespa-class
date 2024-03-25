import './bootstrap';
import {createApp} from "vue";
import Counter from "./components/counter.vue";
import App from "./App.vue";

const app=createApp()

app.component('counter', Counter)
app.component('app', App)

app.mount('#app')
