import './bootstrap';
import '../css/app.css';

import {createApp, DefineComponent, h} from 'vue';
import {createInertiaApp} from '@inertiajs/vue3';
import {ZiggyVue} from "../../vendor/tightenco/ziggy";
import {resolvePageComponent} from "laravel-vite-plugin/inertia-helpers";
import BaseLayout from "@/Layouts/BaseLayout.vue";

const appName = import.meta.env.VITE_APP_NAME || 'Laravel';

createInertiaApp({
    title: (title) => `${title} - ${appName}`,
    resolve: async name => {
        const page = await resolvePageComponent(`./Pages/${name}.vue`, import.meta.glob<DefineComponent>('./Pages/**/*.vue'));
        page.default.layout = page.default.layout || BaseLayout;
        return page;
    },

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
