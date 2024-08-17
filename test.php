<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inside Design</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f5f5f5;
        }

        header {
            background-color: #fff;
            padding: 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .logo {
            display: flex;
            align-items: center;
        }

        .logo img {
            width: 80px;
            margin-right: 10px;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav li {
            margin-right: 20px;
        }

        nav a {
            text-decoration: none;
            color: #333;
        }

        .section {
            padding: 40px;
            text-align: center;
        }

        .section h1 {
            font-size: 36px;
            margin-bottom: 20px;
            color: #333;
        }

        .section p {
            font-size: 18px;
            line-height: 1.5;
            color: #666;
        }

        .section button {
            background-color: #007bff;
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .section .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .section .container .item {
            flex: 1;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
            margin-bottom: 20px;
            text-align: left;
        }

        .section .container .item h2 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #333;
        }

        .section .container .item p {
            font-size: 16px;
            line-height: 1.5;
            color: #666;
        }

        .section .container .item .author {
            font-size: 14px;
            color: #666;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            <img src="https://www.invisionapp.com/inside-design/static/media/logo.4d77a498.svg" alt="Inside Design">
            <h2>Inside Design</h2>
            <p>by InVision</p>
        </div>
        <nav>
            <ul>
                <li><a href="#">Design Resources</a></li>
                <li><a href="#">Process</a></li>
                <li><a href="#">Videos</a></li>
                <li><a href="#">Inspiration</a></li>
                <li><a href="#">Teams</a></li>
                <li><a href="#">Design</a></li>
            </ul>
        </nav>
        <div>
            <button>SUBSCRIBE</button>
            <a href="https://www.linkedin.com/company/invisionapp/"><img src="https://static.xx.fbcdn.net/images/homenew.php?site=www.facebook.com&amp;id=100000443054570&amp;ref=nf&amp;type=4&amp;logo_id=608&amp;height=40&amp;width=40" alt="LinkedIn"></a>
        </div>
    </header>

    <section class="section">
        <h1>Seriously, you need to start documenting your UX work</h1>
        <p>Check out Sarah Doody's Career Project Diary, the solution to all of</p>
        <div class="container">
            <div class="item">
                <h2>Learning to love the constraints of a design system</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                <p class="author">By Jess Thoms</p>
            </div>
            <div class="item">
                <h2>How to relaunch an e-commerce giant in 120 days using InVision</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                <p class="author">By Rebecca Kerr</p>
            </div>
            <div class="item">
                <h2>InVision's 15 most popular blog posts of all time</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                <p class="author">By Shayna Hodkin</p>
            </div>
            <div class="item">
                <h2>Your guide to writing design briefs (with a free downloadable template)</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas sed diam eget risus varius blandit sit amet non magna.</p>
                <p class="author">By Freelance</p>
            </div>
        </div>
    </section>

    <script>
        // Add JavaScript here if needed
    </script>
</body>
</html>