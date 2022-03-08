<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Site</title>
    <link rel="stylesheet" href="css/screen.css">
</head>
<div id="page">
    <header>
        <a href="#" class="logo" title="Everyday Things"><span>Everyday Things</span></a>
        <div class="hero">
            <h1>Add interest with natural textures</h1><a href="#" title="Get advice from top Designer" class="btn">Get advice from top designer</a>
        </div>
    </header>

    <body>

        <section class="main">
            <aside>
                <div class="content trending">
                    <h3><a href="">What&apos;s trending</a></h3>
                    <p>Lorem ipsum dolor sit amet, consect etuer adipiscing elit. <a href="http://codifydesign.com">Morbi commodo</a>, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis.</p>
                </div>
            </aside>
            <aside>
                <div class="content finding">
                    <h3><a href="#">Where to find it</a></h3>
                    <p>Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Nullam sit amet enim. Lorem ipsum dolor sit amet, consect.</p>
                </div>
            </aside>
            <aside>
                <div class="content trade">
                    <h3><a href="#">Tools of the trade</a></h3>
                    <p>Nullam sit amet enim. Lorem ipsum dolor sit amet, consect etuer adipiscing elit. Morbi commodo, ipsum sed pharetra gravida, orci rhoncus neque, id pulvinar odio.</p>
                </div>
            </aside>
        </section>
        <section class="atmosphere">
            <article>
                <h2>Creating a modern atmosphere</h2>
                <p>Morbi commodo, ipsum sed pharetra gravida, orci magna rhoncus neque, id pulvinar odio lorem non turpis. Lorem ipsum dolor sit amet etuer adipiscing elit. Pulvinar odio lorem non turpis. Nullam sit amet enim lorem.
                </p>
                <a href="#" class="btn" title="Creating a modern atmosphere">Learn more</a>
            </article>
        </section>
        <section class="how-to">
            <aside v-for="item in products">
                <div class="content">
                    <img :src="item.image" :alt="item.name">
                    <h4>{{item.title}}</h4>
                    <p>{{item.body}}</p>
                    <a href="#">Learn more</a>
                </div>
            </aside>
            <blockquote>
                <p class="quote"> Lorem ipsum dolor sit amet conse ctetuer adipiscing elit. Morbi comod sed dolor sit amet consect adipiscing elit.
                </p>
                <p class="credit"><strong>Author Name</strong><br><em>Business Title</em><br> Company
                </p>
            </blockquote>
        </section>
        <nav>
            <ul>
                <li>
                    <a href="lists.php" aria-haspopup="true" title="About Us">About Us</a>
                    <ul>
                        <li>
                            <a href="#">Sub Link-2</a>
                        </li>
                        <li>
                            <a href="#">Sub Link-2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" aria-haspopup="true">Design Corner</a>
                    <ul>
                        <li>
                            <a href="#" aria-haspopup="true">Sub Link-1</a>
                            <ul>
                                <li><a href="#">Sub Sub Link-1</a></li>
                                <li><a href="#">Sub Sub Link-2</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#" aria-haspopup="true">Sub Link-2</a>
                            <ul>
                                <li><a href="#">Sub Sub Link-1</a></li>
                                <li><a href="#">Sub Sub Link-2</a></li>
                            </ul>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" aria-haspopup="true">Products</a>
                    <ul>
                        <li>
                            <a href="#">Sub Link-1</a>
                        </li>
                        <li>
                            <a href="#">Sub Link-2</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#">Contact Us</a>
                </li>
            </ul>
        </nav>
        <footer>
            &copy; Everyday Things
            <div class="content"><a href="#" title="Privacy Policy">Privacy Policy</a><a href="#" title="Terms of Service">Terms of Service</a></div>
        </footer>
</div>
<script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
<script>
    var pageData = {
        products: [{
            "id": "1",
            "title": "How - To: Seating",
            "name": "Choose the proper seating",
            "image": "images/photo_seating.jpg",
            "body": " Consectetuer adipiscing elit. Morbi commodo ipsum sed gravida orci magna rhoncus pulvinar odio lorem."
        }, {
            "id": "2",
            "title": "How - To: Lighting",
            "name": "How - To: Lighting",
            "image": "images/photo_lighting.jpg",
            "body": " Morbi commodo, ipsum sed pharetra gravida magna rhoncus neque id pulvinar odio lorem non turpis nullam sit amet. "
        }]
    };

    const app = new Vue({
        el: '#page',
        data: pageData
    });
</script>
</body>

</html>