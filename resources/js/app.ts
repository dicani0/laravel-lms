import './bootstrap';
import '../css/app.css';

import {createApp, DefineComponent, h} from 'vue';
import {createInertiaApp} from '@inertiajs/vue3';
import {ZiggyVue} from "../../vendor/tightenco/ziggy";
import BaseLayout from "@/Layouts/BaseLayout.vue";

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: (name): Promise<DefineComponent> | DefineComponent | { default: DefineComponent } => {
        const pages = import.meta.glob('./Pages/**/*.vue', {eager: true});
        let page = pages[`./Pages/${name}.vue`] as { default: DefineComponent };
        page.default.layout = page.default.layout || BaseLayout;
        return page;
    },
    // resolve: (name) => resolvePageComponent(
    //     `./Pages/${name}.vue`,
    //     import.meta.glob<DefineComponent>('./Pages/**/*.vue')
    // ),
    setup({el, App, props, plugin}) {
        createApp({render: () => h(App, props)})
            .use(plugin)
            .use(ZiggyVue)
            .mount(el);
    },
    progress: {
        delay: 250,
        color: '#ff0000',
        showSpinner: true,
    },
});
