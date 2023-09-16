<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <!-- <link rel="stylesheet" href="{{asset('css/app.css')}}"> -->
    <link rel="stylesheet" href="{{asset('style.css')}}">
</head>

<body>
    <nav>
        <a href="{{route('home')}}">Home</a>
        <a href="{{route('blog')}}">Recent</a>
        <a href="{{route('about')}}">About</a>
        <a href="{{route('contact')}}">Contact</a>
        <a href="{{route('user')}}">All User</a>
    </nav>

    <article>
        <h1>
            <a href="{{route('first_blog')}}">My first blog post</a>
        </h1>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente recusandae beatae optio eius tenetur unde, ipsum perferendis eveniet ex. Dolores quibusdam neque ea molestiae dicta iusto, impedit adipisci ipsa! Animi, commodi officiis repellat facilis facere unde odit, inventore, repudiandae sed molestiae accusamus velit nihil dolorem culpa corporis nemo quasi doloremque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore quasi aliquid minima perferendis accusantium dignissimos unde itaque, quisquam necessitatibus recusandae voluptatum cupiditate a similique et, autem sapiente odit ab reprehenderit rem repellat, fuga ea quia! Iusto magnam assumenda quibusdam odio, earum, officia reprehenderit repudiandae soluta natus delectus libero inventore ipsam.
        </p>
    </article>

    <article class="second">
        <h1>
            <a href="{{route('second-blog')}}">My second blog post</a>
        </h1>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente recusandae beatae optio eius tenetur unde, ipsum perferendis eveniet ex. Dolores quibusdam neque ea molestiae dicta iusto, impedit adipisci ipsa! Animi, commodi officiis repellat facilis facere unde odit, inventore, repudiandae sed molestiae accusamus velit nihil dolorem culpa corporis nemo quasi doloremque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore quasi aliquid minima perferendis accusantium dignissimos unde itaque, quisquam necessitatibus recusandae voluptatum cupiditate a similique et, autem sapiente odit ab reprehenderit rem repellat, fuga ea quia! Iusto magnam assumenda quibusdam odio, earum, officia reprehenderit repudiandae soluta natus delectus libero inventore ipsam.
        </p>
    </article>

    <article class="third">
        <h1>
            My third blog post
        </h1>

        <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sapiente recusandae beatae optio eius tenetur unde, ipsum perferendis eveniet ex. Dolores quibusdam neque ea molestiae dicta iusto, impedit adipisci ipsa! Animi, commodi officiis repellat facilis facere unde odit, inventore, repudiandae sed molestiae accusamus velit nihil dolorem culpa corporis nemo quasi doloremque. Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tempore quasi aliquid minima perferendis accusantium dignissimos unde itaque, quisquam necessitatibus recusandae voluptatum cupiditate a similique et, autem sapiente odit ab reprehenderit rem repellat, fuga ea quia! Iusto magnam assumenda quibusdam odio, earum, officia reprehenderit repudiandae soluta natus delectus libero inventore ipsam.
        </p>
    </article>
</body>

</html>