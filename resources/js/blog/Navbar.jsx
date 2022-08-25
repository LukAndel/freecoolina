import { Link } from "react-router-dom";
import {useEffect, useState, Fragment} from 'react';
import axios from 'axios';

const Navbar = () => {

    const [categories, setCategories] = useState([]);
    const [openCategories, setOpenCategories] = useState(false)

    const fetchCategories = async () => {
        const responseCategories = await axios.get("/api/categories");
        setCategories(responseCategories.data);
    }

    useEffect (() => {
        fetchCategories();
    }, []);

    return (
        <nav>
            <ul>
                <Link to={'/'}>Admin panel</Link>
                <Link to={'/blog'}>Home</Link>
                <Fragment>
                    <span onClick={() => setOpenCategories(!openCategories)}>
                        Categories
                    </span>
                    {
                        openCategories && <ul id='nav-dropdown'>{categories.map((element) => <li key={element.id}><Link to={'/categories/' + element.name}>{element.name}</Link></li>)}</ul>
                    }
                </Fragment>
                <Link to={'/about-me'}>About me</Link>
                <Link to={'/contact'}>Contact</Link>
                <Link to={'/#'}>My Work</Link>
                <Link to={'/galery'}>Galery</Link>
            </ul>
        </nav>
    )
}

export default Navbar;