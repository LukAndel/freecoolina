import { Route, Routes } from "react-router-dom";
import AboutMe from "./AboutMe";
import Article from "./Article";
import Articles from "./Articles";
import Categories from "./Categories";
import Contact from "./Contact";
import Galery from "./Galery";

const Routing = () => {

return (
    <Routes>
            <Route
                exact
                path={"/blog"}
                element={<Articles />}
            />

            <Route
                exact
                path={"/article/:article_id"}
                element={<Article />}
            />

            <Route
                exact
                path={"/categories/:category"}
                element={<Categories />}
            />

            <Route
                exact
                path={"/about-me"}
                element={<AboutMe />}
            />

            <Route
                exact
                path={"/contact"}
                element={<Contact />}
            />

            <Route
                exact
                path={"/galery"}
                element={<Galery />}
            />


    </Routes>
)
}

export default Routing;