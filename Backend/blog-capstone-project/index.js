import express from "express";
import bodyParser from "body-parser";

const app = express();
const port = 3000;

app.use(bodyParser.urlencoded({ extended: true }));

app.use(express.static("public"));

// Routes
app.get("/", (req, res) => {
    res.render("index.ejs", {
        blogs,
    });
});

app.get("/create-blog", (req, res) => {
    res.render("create-blog.ejs");
});

app.post("/submit", (req, res) => {
    const { title, author, content } = req.body;
    createBlog(title, author, content);
    res.redirect("/");
})

app.get("/edit/:blogIndex", (req, res) => {

    const index = req.params.blogIndex;
    const blog = blogs[index];

    res.render("edit-blog.ejs", {
        blog,
        index
    })
})

app.post("/update", (req, res) => {
    const { title, author, content, index } = req.body;

    updateBlog(title, author, content, index);

    res.redirect("/");
})

app.post("/delete/:blogIndex", (req, res) => {
    const index = req.params.blogIndex;
    
    deleteBlog(index);

    res.redirect("/");
})

// Listener
app.listen(port, () => {
    console.log(`Listening on port ${port}`);
});


// Blogs array
let blogs = [
    {
        title: "New Post",
        date: "April 20, 2024",
        author: "Jake",
        content: "This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text. Longer quote goes here, maybe with some emphasized text in the middle of it. This is some additional paragraph placeholder content. It has been written to fill the available space and show how a longer snippet of text affects the surrounding content. We'll repeat it often to keep the demonstration flowing, so be on the lookout for this exact same string of text. This is some additional paragraph placeholder content. It's a slightly shorter version of the other highly repetitive body text used throughout."
    },
    
];


// Helper functions
function createBlog(title, author, content) {
    
    const formattedDate = getFormattedDate();

    const newBlog = {
        title: title,
        date: formattedDate,
        author: author,
        content: content,
    }

    blogs.push(newBlog);
}

function updateBlog(title, author, content, index) {

    const formattedDate = getFormattedDate();

    blogs[index].title = title;
    blogs[index].date = formattedDate;
    blogs[index].author = author;
    blogs[index].content = content;    
}

function deleteBlog(index) {
    blogs.splice(index, 1);
}

function getFormattedDate() {
    const date = new Date();
    const options = { 
        month: "long", 
        day: "numeric", 
        year: "numeric" 
    };
    
    const formattedDate = date.toLocaleDateString("en-US", options);

    return formattedDate;
}

