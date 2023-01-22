<style>
    .col .social a i{
        color: rgb(142, 68, 173);
        margin-top:0rem;
        margin-right: 10px;
        transition: 0.3s ease;
    }
    .col .social a i:hover{
        transform: scale(2.0);
        filter:grayscale(25);
    }
    .col .links a{
        display: block;
        text-decoration: none;
        color:#f2f2f2;
        margin-bottom: 5px;
        position: relative;
        transition: 0.3s ease;
    }
    .col .links a::before{
        content:'';
        height: 16px;
        width:5px;
        position: absolute;
        top:5px;
        left:-10px;
        background-color: #330033;
        transition: 0.5s ease;
        opacity: 0;
    }
    .col .links a:hover::before{
        opacity: 1;
    }
    .col .links a:hover{
        transform: translateX(-8px);
        color: #330033;
    }

</style>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col" id="company">

                <div class="social">
                    <a href="#"><i class="fab fa-facebook "></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                    <a href="#"><i class="fab fa-youtube"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
            </div>
        </div>
    </div>
</footer>