import React from "react";
import { createInertiaApp } from "@inertiajs/inertia-react"
import { createRoot } from 'react-dom/client'
import Navbar from "./Components/Navbar";
import 'bootstrap/dist/css/bootstrap.min.css';


createInertiaApp({
    resolve: name => import(`./Pages/${name}`),
    setup({ el, App, props }) {
        createRoot(el).render(
            <>
                <Navbar />
                <App {...props} />
            </>
        )
    }
});
