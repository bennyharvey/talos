require('./bootstrap');

import { createApp, h } from 'vue'
import { createInertiaApp } from '@inertiajs/inertia-vue3'
import { InertiaProgress } from '@inertiajs/progress'
import ElementPlus from 'element-plus'
import 'element-plus/dist/index.css'
import Equal from 'equal-vue'
import 'equal-vue/dist/style.css'

import '../css/dark-theme-css-vars.css'
import '../css/theme.css'

InertiaProgress.init()

createInertiaApp({
    resolve: name => require(`./Pages/${name}`),
    setup({ el, App, props, plugin }) {
        const app = createApp({ render: () => h(App, props) })
            .use(plugin)
            .use(ElementPlus)
            .use(Equal)
        app.config.globalProperties.$route = route
        app.mount(el)
    }
})
