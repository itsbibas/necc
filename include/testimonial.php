<div class="leaders-message-box">
    <div class="our-leaders rev">
        TESTIMONIAL
    </div>
</div>

<div class="wrapper">
    <div class="box rev">
        <i class="fas fa-quote-left quote"></i>
        <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
        <div class="content rev">
            <div class="info">
                <div class="name">Alex Smith</div>
                <div class="job">Designer | Developer</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>

        </div>
    </div>
    <div class="box rev">
        <i class="fas fa-quote-left quote"></i>
        <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
        <div class="content rev">
            <div class="info">
                <div class="name">Steven Chris</div>
                <div class="job">YouTuber | Blogger</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>

        </div>
    </div>
    <div class="box rev">
        <i class="fas fa-quote-left  quote"></i>
        <p>Lorem aliasry ipsum dolor sits ametans, consectetur adipisicing elitits. Expedita reiciendis itaque placeat thuratu, quasi yiuos repellendus repudiandae deleniti ideas fuga molestiae, alias.</p>
        <div class="content rev">
            <div class="info">
                <div class="name">Kristina Bellis</div>
                <div class="job">Freelancer | Advertiser</div>
                <div class="stars">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="far fa-star"></i>
                </div>
            </div>

        </div>
    </div>
</div>


<style>
    .wrapper {
        margin: 2% 0;
        padding: 0% 20%;
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
    }

    .wrapper .box {

        background: #fff;
        width: calc(33% - 10px);
        padding: 25px;
        border-radius: 3px;
        box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.15);
    }

    .wrapper .box i.quote {
        font-size: 20px;
        color: #17a2b8;
    }

    .wrapper .box .content {
        display: flex;
        flex-wrap: wrap;
        align-items: center;
        justify-content: space-between;
        padding-top: 10px;
    }

    .box .info .name {
        font-weight: 600;
        font-size: 17px;
    }

    .box .info .job {
        font-size: 16px;
        font-weight: 500;
        color: #17a2b8;
    }

    .box .info .stars {
        margin-top: 2px;
    }

    .box .info .stars i {
        color: #17a2b8;
    }

    .box .content .image {
        height: 75px;
        width: 75px;
        padding: 3px;
        background: #17a2b8;
        border-radius: 50%;
    }

    .content .image img {
        height: 100%;
        width: 100%;
        object-fit: cover;
        border-radius: 50%;
        border: 2px solid #fff;
    }

    .box:hover .content .image img {
        border-color: #fff;
    }

    @media (max-width: 1045px) {
        .wrapper .box {
            width: calc(50% - 10px);
            margin: 10px 0;
        }
    }

    @media (max-width: 702px) {
        .wrapper .box {
            width: 100%;
        }
    }
</style>