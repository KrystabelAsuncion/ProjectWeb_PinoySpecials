@extends('Auth.layout')

@section('content')


<nav class="navbar navbar-expand-lg sticky-top" style="background: #f7b87e;">
    <a href="#" class="navbar-brand">
        <img src="img/logo_ic/logo11.png" width="50" class="img-fluid px-2 mx-2">
        <span class="fw-bold h4">Pinoy Specials</span>
    </a>
    <button class="navbar-toggler mx-3" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon p-3"></span>
    </button>

    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
        <ul class="navbar-nav nav-underline d-flex flex-row justify-content-sm-center" role="tablist">
            <!--hometab-->
            <li class="nav-item active">
                <a class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#homeTabPane" role="tab" aria-controls="homeTabPane" aria-selected="true">
                    <span class="h3">Home</span>
                </a>
            </li>
            <!--categories-->
            <li class="nav-item active">
                <a class="nav-link" id="category-tab" data-bs-toggle="tab"
                href="#categoryTabPane" role="tab" aria-controls="categoryTabPane"
                aria-selected="true">
                    <span class="h3">Categories</span>
                </a>
            </li>

            <!--PopularTab-->
            <li class="nav-item active" role="presentation">
                <a class="nav-link" id="popular-tab" data-bs-toggle="tab"
                href="#popularTabPane" role="tab" aria-controls="popularTabPane"
                aria-selected="true">
                    <span class="h3">Popular</span>
                </a>
            </li>

            <!--add recipe-->
            <li class="nav-item active" role="presentation">
                <a class="nav-link" id="add-tab" data-bs-toggle="tab"
                href="#addTabPane" role="tab" aria-controls="addTabPane"
                aria-selected="true">
                    <span class="h3">Make Recipe</span>
                </a>
            </li>

            <!--AboutTab-->
            <li class="nav-item active" role="presentation">
                <a class="nav-link" id="about-tab" data-bs-toggle="tab"
                href="#aboutTabPane" role="tab" aria-controls="aboutTabPane"
                aria-selected="true">
                    <span class="h3">About us</span>
                </a>
            </li>

            <!--contactTab-->
            <li class="nav-item active" role="presentation">
                <a class="nav-link" id="contact-tab" data-bs-toggle="tab"
                href="#contactTabPane" role="tab" aria-controls="contactTabPane"
                aria-selected="true">
                    <span class="h3">Contact us</span>
                </a>
            </li>

            <!--Profile-->
            <li class="nav-item active" role="presentation">
                <a class="nav-link" id="User-tab" data-bs-toggle="tab"
                href="#UserTabPane" role="tab" aria-controls="UserTabPane"
                aria-selected="true">
                    <span class="h5 p-3">User Profile</span>
                </a>
            </li>

        </ul>
    </div>
</nav>

<div class="tab-content">

    <!--home-->
    <div class="tab-content" id="homeContent">

        <div class="tab-pane fade show active" id="homeTabPane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">

            <div class="container-fluid px-4">

                <div class="row text-center my-4">
                    <span class="display-1 text-uppercase fw-bold">
                        Welcome to pinoy specials
                    </span>
                </div>

                <div class="row">

                    <div class="col-lg-3 p-4 text-center">
                        <img src="img/logo_ic/LOGO.png" class="img-fluid  d-none d-lg-block" style="width: 310px;">
                    </div>

                    <div class="col d-flex align-items-center text-center" style="font-weight: normal;">
                        <h2 class="display-5">Welcome to Pinoy Specials, your ultimate destination for
                            unlocking the rich and diverse world of Filipino cuisine!
                            Our user user-friendly website and application are meticulously
                            crafted to ignite and guide your passion for cooking, bringing
                            the heart of the Philippines right to your kitchen.</h2>
                    </div>
                </div>

                <div class="row text-center my-4">
                    <span class="display-6 fs-21 my-auto">
                        Whether you’re a Filipino Cuisine connoisseur or just beggining to explore
                    its wonders, Pinoy Specials is here to accompany you a flavorful journey.
                    Elevate your cooking experience, celebrate the rich tapestry of Filipino flavors,
                    and make every meal a memorable one with Pinoy Specials- where passion meets plate!
                    </span>
                </div>

                <hr class="my-4 mx-auto" style="width: 85%; border-width: 3px;">

                <div class="row gy-3 mx-3">

                    <div class="col-lg-3 col-sm-7 mx-auto text-center py-3" style="border-radius: 40px; background-color: #eca766a5;">
                        <img src="img/logo_ic/book.jpeg" class="rounded-circle img-fluid" width="300px" height="300px">
                        <span class="display-5 mx-auto p-1">Embark on a delicious and flavorful dishes.</span>
                    </div>

                    <div class="col-lg-3 col-sm-7 mx-auto text-center py-3" style="border-radius: 40px; background-color: #eca766a5;">
                        <img src="img/logo_ic/chef.jpeg" class="rounded-circle img-fluid" width="300px" height="300px">
                        <span class="display-5 mx-auto p-1">Discover Filipino Wonders.</span>
                    </div>

                    <div class="col-lg-3 col-sm-7 mx-auto text-center py-3" style="border-radius: 40px; background-color: #eca766a5;">
                        <img src="img/logo_ic/book.jpeg" class="rounded-circle img-fluid" width="300px" height="300px">
                        <span class="display-5 mx-auto p-1">Save your favorite recipes.</span>
                    </div>
                </div>

                <hr class="my-4 mx-auto" style="width: 85%; border-width: 3px;">

                <div class="row text-center">
                    <span class="text-uppercase display-2 fw-bold">Meet the Filipino chefs!</span>
                    <div class="row">
                        <span class="text-uppercase display-5 p-5">Explore the famous Filipino Chefs who have mastered the art of creating their mouth watering dishes.</span>
                    </div>
                </div>

                <!--claudetayag-->
                <div class="row mt-5 shadow-lg p-5 mx-5 claude" style="border-radius: 70px; background-color: #f7c699b7;">

                    <div class="col col-sm-8 col-md-11 col-lg-3">
                        <img src="img/chef/CLAUDETAYAG.png" class="img-fluid d-block" style="max-width: 325px">
                    </div>

                    <div class="col col-lg-5 align-self-center text-center">
                        <span class="display-3 fw-bold text-sm-center">Claude Tayag</span>
                        <div class="row display-6 fs-2 p-5 d-none d-md-none d-lg-block">
                            Chef Tayag is renowned for his innovative take on Filipino cuisine.
                            One of his notable dishes is Kambingan,
                            showcasing his creativity in preparing goat meat.
                        </div>
                    </div>

                    <div class="col col-md-4 d-none d-md-none d-lg-block">
                        <div class="card shadow align-items-center p-5 mt-4 imgcard"
                        style="width: 30rem; background: #FEE9D6; border: none; border-radius: 50px;"
                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-placement="left"
                        data-bs-content="<div class='card text-center'><div class='card-header'>
                            <img src='img/foods/kambingan.JPG' class='img-fluid rounded-circle card-img-center' width='200'><h1>KAMBINGAN</h1></div>
                            <div class='card-body'><h5>Kambingan by Claude Tayag offers a savory twist to goat meat, featuring bold flavors
                                and traditional Filipino spices, crafted with Chef Tayag's culinary finesse.</h5></div></div>">

                            <img src="img/foods/kambingan.JPG" class="img-fluid rounded-circle card-img-center" width="250">
                            <span class="mt-4 h2">Kambingan</span>
                        </div>
                    </div>
                </div>

                <!--logro-->
                <div class="row mt-5 shadow-lg mx-5 p-5" style="border-radius: 70px; background-color: #f7c699b7;">

                    <div class="col col-sm-6 col-md-11 col-lg-3">
                        <img src="img/chef/CHEFBOYLOGRO.png" class="img-fluid d-block" style="max-width: 325px">
                    </div>

                    <div class="col col-lg-5 align-self-center text-center">
                        <span class="display-3 fw-bold">Pablo "Boy" Logro</span>
                        <div class="row display-6 fs-2 p-5 d-none d-md-block">
                            Chef Pablo "Boy" Logro is a well-known Filipino chef who gained fame through his
                            culinary expertise and television appearances. Chef Boy Logro is associated with various Filipino dishes,
                            and one of his famous dishes is "Lechon Belly."
                        </div>
                    </div>
                    <div class="col col-md-4 d-none d-md-block">
                        <div class="card shadow align-items-center p-5 mt-4" style="width: 30rem; background: #FEE9D6; border: none; border-radius: 50px;"
                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-placement="left"
                        data-bs-content="<div class='card text-center'><div class='card-header'>
                            <img src='img/foods/kambingan.JPG' class='img-fluid rounded-circle card-img-center' width='200'><h1>Lechon Belly</h1></div>
                            <div class='card-body'><h5>Chef Boy Logro's Lechon Belly presents a succulent and crispy pork belly dish, meticulously
                                roasted to perfection, showcasing the renowned chef's expertise in Filipino Cuisine.</h5></div></div>">

                            <img src="img/foods/lechonBelly.JPG" class="img-fluid rounded-circle card-img-center" width="250">
                            <span class="mt-4 h2">Lechon Belly</span>
                        </div>
                    </div>
                </div>

                <!--Tatung Sarthou-->
                <div class="row mt-5 shadow-lg mx-5 p-5" style="border-radius: 50px;  background-color: #f7c699b7;">

                    <div class="col col-sm-6 col-md-11 col-lg-3">
                        <img src="img/chef/TATUNGSARTHOU.png" class="img-fluid d-block" style="max-width: 325px">
                    </div>

                    <div class="col col-lg-5 align-self-center text-center">
                        <span class="display-3 fw-bold">Tatung Sarthou</span>
                        <div class="row display-6 fs-2 p-5 d-none d-md-block">
                            Chef Tatung is known for his advocacy of promoting Filipino cuisine and culinary heritage.
                            Adobong Pula, a red-hued version of the classic adobo, is one of his creations.
                        </div>
                    </div>
                    <!--food image-->
                    <div class="col col-md-4 d-none d-md-block">
                        <div class="card shadow align-items-center p-5 mt-4" style="width: 30rem; background: #FEE9D6; border: none; border-radius: 50px;"
                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-placement="left"
                        data-bs-content="<div class='card text-center'><div class='card-header'>
                            <img src='img/foods/adobongpula.JPG' class='img-fluid rounded-circle card-img-center' width='200'><h1>Adobong Pula</h1></div>
                            <div class='card-body'><h5>Adobong Pula by Tatung Sarthou delivers a unique take on the classic adobo, infused with rich red ingredients and intricate flavors, reflecting Chef Sarthou's innovative approach to Filipino cooking.</h5></div></div>">
                            <img src="img/foods/adobongPula.JPG" class="img-fluid rounded-circle card-img-center" width="250">
                            <span class="mt-4 h2">Adobong Pula</span>
                        </div>
                    </div>
                </div>

                <!--Jp Anglo-->
                <div class="row mt-5 shadow-lg mx-5 p-5" style="border-radius: 50px; background-color: #f7c699b7;">

                    <div class="col col-sm-6 col-md-11 col-lg-3">
                        <img src="img/chef/JPANGLO.png" class="img-fluid d-block" style="max-width: 325px">
                    </div>

                    <div class="col col-lg-5 align-self-center text-center">
                        <span class="display-3 fw-bold">Jp Anglo</span>
                        <div class="row display-6 fs-2 p-5 d-none d-md-block">
                            Chef JP Anglo is known for his innovative approach to Filipino cuisine and his advocacy for local ingredients.
                            Talangka Rice, featuring crab fat, is one of his well-known dishes.
                        </div>
                    </div>

                    <div class="col col-md-4 d-none d-md-block">
                        <div class="card shadow align-items-center p-5 mt-4" style="width: 30rem; background: #FEE9D6; border: none; border-radius: 50px;"
                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-placement="left"
                        data-bs-content="<div class='card text-center'><div class='card-header'>
                            <img src='img/foods/talangkaRice.JPG' class='img-fluid rounded-circle card-img-center' width='200'><h1>Talangka Rice</h1></div>
                            <div class='card-body'><h5>Talangka Rice by JP Anglo harmonizes the distinct taste of crab fat or talangka with fragrant rice, creating a delectable fusion dish that highlights Chef Anglo's creative culinary flair.</h5></div></div>">
                            <img src="img/foods/talangkaRice.JPG" class="img-fluid rounded-circle card-img-center" width="250">
                            <span class="mt-4 h2">Talangka Rice</span>
                        </div>
                    </div>

                </div>

                <!--Margarita Flores-->
                <div class="row mt-5 shadow-lg p-5 mx-5" style="border-radius: 50px; background-color: #f7c699b7;">

                    <div class="col col-sm-6 col-md-11 col-lg-3">
                        <img src="img/chef/MARGARITA.png" class="img-fluid d-block" style="max-width: 325px;">
                    </div>

                    <div class="col col-lg-5 align-self-center text-center">
                        <span class="display-3 fw-bold">Margarita Flores</span>
                        <div class="row display-6 fs-2 p-5 d-none d-md-block">
                                Chef Flores is known for her culinary expertise in various cuisines, including Filipino.
                                While she has showcased a variety of dishes, her take on Lechon de Leche Sinigang is notable.
                        </div>
                    </div>

                    <div class="col col-md-4 d-none d-md-block">
                        <div class="card shadow align-items-center p-5 text-center" style="width: 30rem; background: #FEE9D6; border: none; border-radius: 50px;"
                        data-bs-toggle="popover" data-bs-trigger="hover" data-bs-html="true" data-bs-placement="left"
                        data-bs-content="<div class='card text-center'><div class='card-header'>
                            <img src='img/foods/lechonsinigang.JPG' class='img-fluid rounded-circle card-img-center' width='200'><h1>Lechon De Leche Sinigang</h1></div>
                            <div class='card-body'><h5>Lechon de Leche Sinigang by Margarita Flores reimagines the traditional sinigang by incorporating tender lechon de leche, adding a delightful twist to the beloved Filipino sour soup, curated by Chef Flores's culinary expertise.</h5></div></div>">

                            <img src="img/foods/lechonsinigang.jpg" class="img-fluid rounded card-img-center rounded-circle" width="220px" height="200px">
                            <span class="mt-4 h2">Lechon De Leche Sinigang</span>
                        </div>

                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--category-->
    <div class="tab-content" id="categoryContent">

        <div class="tab-pane fade active" id="categoryTabPane" role="tabpanel" aria-labelledby="category-tab" tabindex="0">

            <div class="container-fluid">

                <!--breakfast-->
                <div class="row">
                    <span class="display-1 my-3">Breakfast</span>
                </div>

                <div class="row justify-content-start mt-5 shadow-lg p-4">
                    <!--Looping posts-->
                    <!-- <($recipes as $item)-->
                        <!--@ <($item->category->name == 'breakfast')-->
                            <div class="col p-3 mx-auto h4" style="border-radius: 20px;">
                                <div class="card shadow-lg" style="width: 20rem; height:32rem; background-color: transparent; border: none;">
                                    <!--photo-->
                                    <!--@ <($item->recipe_image)-->
                                        <img src="" class="card-img-center rounded-circle mx-auto m-3" width="200px">
                                    <!--@-->
                                        <p>No Image Available</p>
                                    <!--@-->
                                    <div class="card-body">
                                        <div class="card-title">
                                            <!---title-->
                                            <h1></h1>
                                            <div class="card-text">
                                                <!--category-->
                                                <h5></h5>
                                                <!--preview-->
                                                <p class="display-6 fs-6"></p>
                                            </div>
                                            <div class="card-footer" style="background: transparent; padding: 0;">
                                                <a href="{{route('recipe_view')}}" class="btn btn-outline-secondary mt-3 text-muted fs-5 ms-2" type="button">View Recipe</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <!--@-->
                    <!--@-->
                </div>

                <!--GET all posts for Breakfast-->
                <div class="row text-end m-4">
                    <h4><a href="#" style="color: black;">View All</a></h4>
                </div>

                <!--Lunch-->
                <div class="row">
                    <div class="col my-auto mt-5 ps-2 m-3" style="text-align: start;">
                        <span class="display-1">Lunch</span>
                    </div>
                </div>

                <div class="row justify-content-center mt-5 shadow-lg p-4">
                    <div class="col p-3 mx-auto h4" style="border-radius: 20px;">
                        <!--looping-->
                        <div class="card shadow-lg p-3" style="width: 20rem; background-color: transparent; border: none;">
                            <img src="img/adobongPula.JPG" class="card-img-center rounded">
                            <div class="card-body">
                                <div class="card-title">
                                    <h1>Beef Tapa</h1>
                                    <div class="card-text">
                                        <h5>Heavy Breakfast</h5>
                                        <p class="display-6 fs-6">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Sint velit sunt amet in quam temporibus ratione neque dicta,
                                            est eius aliquid iusto excepturi, aspernatur esse sit nihil officia sapiente laboriosam.</p>
                                    </div>
                                    <div class="card-footer" style="background: transparent; padding: 0;">
                                        <a href="" class="btn btn-outline-secondary mt-3 text-muted fs-5 ms-2" type="button">Click</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--GET all posts for Lunch-->
                <div class="row text-end m-4">
                    <h4><a href="#" style="color: black;">View All</a></h4>
                </div>

                <!--Dinner-->
                <div class="row">
                    <div class="col my-auto mt-5 ps-2 m-3" style="text-align: start;">
                        <span class="display-1">Dinner</span>
                    </div>
                </div>

                <div class="row justify-content-center mt-5 shadow-lg p-4">
                    <div class="col p-3 mx-auto h4" style="border-radius: 20px;">
                        <!--looping-->
                        <div class="card shadow p-3" style="width: 20rem; background-color: transparent; border: none;">
                            <img src="img/adobongPula.JPG" class="card-img-center rounded">
                            <div class="card-body">
                                <div class="card-title">
                                    <h1>Beef Tapa</h1>
                                    <div class="card-text">
                                        <h5>Heavy Breakfast</h5>
                                        <p class="display-6 fs-6">
                                            Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                                            Sint velit sunt amet in quam temporibus ratione neque dicta,
                                            est eius aliquid iusto excepturi, aspernatur esse sit nihil officia sapiente laboriosam.</p>
                                    </div>
                                    <div class="card-footer" style="background: transparent; padding: 0;">
                                        <a href="" class="btn btn-outline-secondary text-muted fs-5 ms-2 mt-3" type="button">Click</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!--GET all posts for Dinner-->
                <div class="row text-end m-4">
                    <h4><a href="#" style="color: black;">View All</a></h4>
                </div>

            </div>

        </div>

    </div>

    <!--popular-->
    <div class="tab-content" id="popularContent">

        <div class="tab-pane fade active" id="popularTabPane" role="tabpanel" aria-labelledby="popular-tab" tabindex="0">

            <div class="container-fluid">

                <!--search-->
                <div class="row mt-5">
                    <div class="col-4 mx-auto">
                        <div class="input-group">
                            <input type="search" class="form-control rounded fs-4" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />
                            <button type="button" class="btn btn-outline-secondary fs-4" data-mdb-ripple-init><i class="fa fa-search" aria-hidden="true"></i></button>
                        </div>
                    </div>
                </div>

                <!--mostviewed-->
                <h1 class="mb-2 mt-4">Most viewed Recipes</h1>
                <div class="row shadow-lg p-4">
                    <!--looping post-->
                    <div class="col">
                        <div class="row">
                            <div class="col">
                                <div class="card text-center" style="width:20rem; background-color:#fed8b5a5;">
                                    <!--img-->
                                    <div class="card-img mt-2">
                                        <img src="img/Adobo.JPG" class="img-center rounded-circle" width="200px">
                                    </div>
                                    <!--title-->
                                    <div class="card-header">
                                        <span class="h2">Title</span>
                                    </div>
                                    <!--category-->
                                    <div class="card-body">
                                        <div class="card-text">
                                            Category
                                        </div>
                                        <!--fullview recipe-->
                                        <div class="row mt-3">
                                            <button class="btn btn-outline-secondary mx-auto" style="width: 150px;">
                                                View Recipe
                                            </button>
                                        </div>
                                        <div class="row mt-2 text-muted">
                                            <!--bookmark count-->
                                            <div class="col">
                                                <i class="fa fa-bookmark" aria-hidden="true"></i>
                                                count
                                            </div>
                                            <!--views count-->
                                            <div class="col">
                                                <i class="fa fa-eye" aria-hidden="true"></i>
                                                views
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--makerecipe-->
    <div class="tab-content" id="addContent">

        <div class="tab-pane fade active" id="addTabPane" role="tabpanel" aria-labelledby="add-tab" tabindex="0">

            <div class="container-fluid">

                <div class="container-fluid">
                    <div class="row text-center my-3">
                        <span class="display-3 fw-bold">Make your own Pinoy Recipe</span>
                    </div>

                    <div class="row my-4">

                        <span class="display-5 fs-2 text-center">
                            Get ready to embark on a flavorful adventure through the vibrant world of Filipino cuisine.
                            Our webpage is your one-stop destination for sharing, discovering, and indulging in authentic Pinoy recipes that capture the essence of Filipino culture and tradition.
                        </span>
                    </div>

                    <div class="row shadow-lg py-4 mx-5" style="background-color: #deab7b;">

                        <form action="" method="">
                            @csrf
                            <div class="row justify-content-center">

                                <div class="col-lg-6 mx-auto">
                                    <div class="form-floating mb-3">
                                        <input name="recipe_name" type="text" class="form-control" id="name" placeholder="">
                                        <label for="name" class="input">Recipe Name</label>
                                    </div>

                                    <div class="input-group mb-3">
                                        <div class="form-floating">
                                            <select class="form-select" id="floatingSelectGrid" aria-label="Floating label select example" style="height: 50px;">
                                              <option selected class="fs-3">Select category</option>
                                              <option value="breakfast">breakfast</option>
                                              <option value="lunch">lunch</option>
                                              <option value="dinner">dinner</option>
                                            </select>
                                            <label for="floatingSelectGrid" class="input">Recipe Category</label>
                                          </div>
                                    </div>

                                    <div class="form-floating mb-2">
                                        <textarea name="recipe_description" class="form-control" placeholder="" id="desc" style="height: 250px"></textarea>
                                        <label for="desc" class="input">Recipe Description</label>
                                    </div>

                                    <div class="form-floating">
                                        <textarea name="recipe_ingredients" class="form-control" placeholder="" id="ingredients" style="height: 250px"></textarea>
                                        <label for="ingredients" class="input">Recipe Ingredients</label>
                                    </div>

                                    <div class="form-floating my-2">
                                        <textarea name="recipe_steps" class="form-control" placeholder="" id="steps" style="height: 250px"></textarea>
                                        <label for="steps" class="input">Recipe Steps</label>
                                    </div>

                                    <div class="mb-3">
                                        <label for="recipe_image" class="form-label"><h4>Insert Recipe Image</h4></label>
                                        <input class="form-control form-control-sm" id="recipe_image" name="recipe_image" type="file" multiple>
                                    </div>

                                    <div class="row justify-content-center text-center">
                                        <button type="submit" class="btn btn-success w-50 ">Submit</button>
                                    </div>
                                </div>

                            </div>

                        </form>
                    </div>
                </div>

            </div>

        </div>

    </div>

    <!--about-->
    <div class="tab-content" id="aboutContent">

        <div class="tab-pane fade active" id="aboutTabPane" role="tabpanel" aria-labelledby="about-tab" tabindex="0">

            <div class="container-fluid">

                <div class="row text-center my-3">

                    <h1 class="display-2">We are the Pahiyas Palate!</h1>

                    <div class="row text-center my-2">

                        <h3 class="display-6 fs-2">
                            Welcome to Pahiyas Palate, the passionate team behind Pinoy Specials, your ultimate guide to exploring the rich and diverse flavors of Filipino cuisine!
                            At Pahiyas Palate, we're dedicated to celebrating the culinary heritage of the Philippines, offering you a tantalizing journey through the vibrant tapestry of Pinoy flavors.
                            Our team is fueled by a love for Filipino food and a commitment to sharing its stories with the world
                        </h3>
                    </div>
                </div>

                <!--team profile-->
                <div class="row py-3" style="height: 30rem; ">

                    <div class="col-auto mx-auto shadow-lg py-3 profile" style="background-color: #f7b87e;">

                        <div class="row">
                            <img src="" class="img-fluid rounded-circle">
                        </div>

                        <div class="card" style="width: 20rem;">

                            <div class="card-body">

                                <h4 class="card-title">
                                    name
                                </h4>
                                <div class="card-text">
                                    <span>Role</span>
                                    <br>
                                    <span>Location</span>
                                </div>
                                <div class="card-footer">
                                    icons
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-auto mx-auto shadow-lg py-3 profile" style="background-color: #f7b87e;">

                        <div class="row">
                            <img src="" class="img-fluid rounded-circle">
                        </div>

                        <div class="card" style="width: 20rem;">

                            <div class="card-body">

                                <h4 class="card-title">
                                    name
                                </h4>
                                <div class="card-text">
                                    <span>Role</span>
                                    <br>
                                    <span>Location</span>
                                </div>
                                <div class="card-footer">
                                    icons
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-auto mx-auto shadow-lg py-3 profile" style="background-color: #f7b87e;">

                        <div class="row">
                            <img src="" class="img-fluid rounded-circle">
                        </div>

                        <div class="card" style="width: 20rem;">

                            <div class="card-body">

                                <h4 class="card-title">
                                    name
                                </h4>
                                <div class="card-text">
                                    <span>Role</span>
                                    <br>
                                    <span>Location</span>
                                </div>
                                <div class="card-footer">
                                    icons
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-auto mx-auto shadow-lg py-3 profile" style="background-color: #f7b87e;">

                        <div class="row">
                            <img src="" class="img-fluid rounded-circle">
                        </div>

                        <div class="card" style="width: 20rem;">

                            <div class="card-body">

                                <h4 class="card-title">
                                    name
                                </h4>
                                <div class="card-text">
                                    <span>Role</span>
                                    <br>
                                    <span>Location</span>
                                </div>
                                <div class="card-footer">
                                    icons
                                </div>

                            </div>
                        </div>
                    </div>

                    <div class="col-auto mx-auto shadow-lg py-3 profile" style="background-color: #f7b87e;">

                        <div class="row">
                            <img src="" class="img-fluid rounded-circle">
                        </div>

                        <div class="card" style="width: 20rem;">

                            <div class="card-body">

                                <h4 class="card-title">
                                    name
                                </h4>
                                <div class="card-text">
                                    <span>Role</span>
                                    <br>
                                    <span>Location</span>
                                </div>
                                <div class="card-footer">
                                    icons
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </div>

    <!--contact-->
    <div class="tab-content" id="contactContent">

        <div class="tab-pane fade active" id="contactTabPane" role="tabpanel" aria-labelledby="contact-tab" tabindex="0">

            <div class="container-fluid">

                <div class="row text-center my-4">
                    <h1 class="display-3 fw-bold">
                        WE’D LOVE TO HEAR FROM YOU!
                    </h1>
                </div>

                <div class="row text-center mb-4">
                    <h2 class="display-5 fs-1">
                        Thank you for your interest in Pahiyas Palate and Pinoy Specials!
                         Whether you have a question, a suggestion, or simply want to share your thoughts with us, we're here to listen.
                    </h2>
                </div>

                <div class="row shadow-lg p-4 mx-4" style="background-color: #deab7b; border-radius: 20px;">

                    <div class="row my-3">
                        <h1>
                            EMAIL
                        </h1>

                        <div class="row">
                            <p class="display-6 fs-2 ms-3">Feel free to drop us an email at <span><a href="">contact@pahiyaspalate.com</a></span> for any inquiries or collaborations.
                                 We strive to respond to all emails promptly.</p>
                        </div>
                    </div>

                    <div class="row">
                        <h1>
                            Socials
                        </h1>

                        <div class="row">
                            <p class="display-6 fs-2 ms-3">Connect with us on our social media platforms for the latest updates,
                                behind-the-scenes glimpses, and delicious food inspirations:
                            </p>

                            <div class="row mx-auto text-center p-4">
                                <div class="col justify-content-center">
                                    <a class="btn btn-outline-facebook text-center shadow" style="width: 30rem;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-facebook" viewBox="0 0 18 18">
                                            <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951"/>
                                        </svg>
                                        <span class="h2">Facebook</span>
                                    </a>
                                </div>

                                <div class="col justify-content-center">
                                    <button class="btn btn-outline-instagram text-center shadow" style="width: 30rem;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-instagram" viewBox="0 0 18 18">
                                            <path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.9 3.9 0 0 0-1.417.923A3.9 3.9 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.9 3.9 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.9 3.9 0 0 0-.923-1.417A3.9 3.9 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599s.453.546.598.92c.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.5 2.5 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.5 2.5 0 0 1-.92-.598 2.5 2.5 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233s.008-2.388.046-3.231c.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92s.546-.453.92-.598c.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92m-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217m0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334"/>
                                          </svg>

                                        <span class="h2">Instagram</span>
                                    </button>
                                </div>

                                <div class="col justify-content-center">
                                    <button class="btn btn-outline-twitter text-center shadow" style="width: 30rem;">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-twitter" viewBox="0 0 18 18">
                                            <path d="M5.026 15c6.038 0 9.341-5.003 9.341-9.334q.002-.211-.006-.422A6.7 6.7 0 0 0 16 3.542a6.7 6.7 0 0 1-1.889.518 3.3 3.3 0 0 0 1.447-1.817 6.5 6.5 0 0 1-2.087.793A3.286 3.286 0 0 0 7.875 6.03a9.32 9.32 0 0 1-6.767-3.429 3.29 3.29 0 0 0 1.018 4.382A3.3 3.3 0 0 1 .64 6.575v.045a3.29 3.29 0 0 0 2.632 3.218 3.2 3.2 0 0 1-.865.115 3 3 0 0 1-.614-.057 3.28 3.28 0 0 0 3.067 2.277A6.6 6.6 0 0 1 .78 13.58a6 6 0 0 1-.78-.045A9.34 9.34 0 0 0 5.026 15"/>
                                        </svg>

                                        <span class="h2">Twitter</span>
                                    </button>
                                </div>

                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>

    <!--profile-->
    <div class="tab-content justify-content-center" id="userContent">
        <div class="tab-pane fade active" id="UserTabPane" role="tabpanel" aria-labelledby="User-tab" tabindex="0">
            <div class="container d-flex justify-content-center">

                <div class="row my-4 align-items-center d-flex justify-content-center">

                    <div class="col-lg-3 p-4 me-3 shadow" style=" border-radius: 20px;">
                        <div class="row justify-content-center">
                            <img src="img/chef/CLAUDETAYAG.png" class="rounded-circle img-fluid" style="background-color: white; width: 250px;">
                        </div>
                        <h2>{{Auth::user()->username}}</h2>
                        <h3>{{Auth::user()->email}}</h3>

                        <div class="row">
                            <div class="row">
                                <div class="row">
                                    <h5>Bookmarked Recipes:</h5>
                                </div>
                                <div class="row">
                                    <h5>Published Recipes:</h5>
                                </div>
                            </div>
                        </div>
                        <div class="row mx-auto justify-content-center mt-3">
                            <a href="{{route('logout')}}" type="button" class="btn btn-outline-dark"
                            onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                            style="width: 20rem;">
                                Logout
                            </a>
                            <form id="logout-form" action="{{route('logout')}}" method="POST">
                                @csrf
                            </form>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <h1>Edit your details</h1>
                        <div class="row shadow p-4 fs-2" style="width: 500px; border-radius: 20px;">
                            <form action="" method="">
                                @csrf
                                <div class="mb-3">
                                    <label for="email" class="form-label">Email address</label>
                                    <input type="email" class="form-control fs-3" id="email" placeholder="Email" value="{{old('email')}}">
                                </div>

                                <div class="mb-3">
                                    <label for="usn" class="form-label">Username</label>
                                    <input type="text" class="form-control fs-3" id="usn" placeholder="Username" value="{{old('username')}}">
                                </div>

                                <div class="mb-3">
                                    <label for="pw" class="form-label">Password</label>
                                    <input type="password" class="form-control fs-3" id="pw" placeholder="Password" value="{{old('password')}}" disabled>
                                </div>

                                <button type="button" class="btn btn-outline-secondary fs-4" style="width: 150px; height: 35px;">
                                    Save changes
                                </button>

                                <div class="row">
                                    <div class="mb-3">
                                        <label for="user_pic" class="form-label"><h4>Change Profile Pic</h4></label>
                                        <input class="form-control form-control-sm" id="user_pic" name="user_pic" type="file">
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>

                    <div class="row mt-3">

                        <h1>Published Recipe</h1>
                        <div class="row">
                            <div class="col-auto">
                                <!--loop-->
                                <div class="card shadow" style="width: 20rem; height: 10rem; background: whitesmoke;">
                                    <div class="card-body">
                                        <h4 class="card-title">Title</h4>
                                        <p class="card-text">description</p>
                                    </div>
                                </div>


                            </div>
                        </div>


                    </div>
                </div>


            </div>

        </div>

    </div>


</div>

@endsection
