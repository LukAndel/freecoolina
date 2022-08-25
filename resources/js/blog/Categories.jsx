import {useEffect, useState} from 'react';
import axios from 'axios';
import { Link } from 'react-router-dom';

const Categories = () => {

    const [articles, setArticles] = useState([]);
    const [images, setImages] = useState([]);
    const [categories, setCategories] = useState([]);

    const fetchArticles = async () => {
        const responseArticles = await axios.get("/api/articles");
        setArticles(responseArticles.data);
    }

    const fetchImages = async () => {
        const responseImages = await axios.get("/api/images");
        setImages(responseImages.data);
    }

    const fetchCategories = async () => {
        const responseCategories = await axios.get("/api/categories");
        setCategories(responseCategories.data);
    }


    useEffect (() => {
        fetchArticles();
        fetchImages();
        fetchCategories();
    }, []);

    return (
        <>
        <div>Categories</div>

        {articles.map((article) => (
            <div className='article' key={article.id}>
                <Link to={"/article/" + article.id}> <h2>{article.title}</h2> </Link>
                {categories.map((category) => (
                    article ?? category.id === article.category_id ? <div key={category.id}>{category.name}</div> : <div>No category</div>          
                ))}
                {images.map((image) => (
                    article ?? image.id === article.image_id ? <img src={'public/Image/' + image.image} key={image.id}></img> : <div>No picture</div>          
                ))}

            </div>
        ))}
        </>
    )
}

export default Categories;