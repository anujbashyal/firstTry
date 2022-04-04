<div class="vendor_body">
    <div class="vendor_topBar">
        <div class="v_tB_title">
            <h2><i class="fa-solid fa-fire-flame-curved" style="color: red;"></i> Today's Deals</h2>
        </div>
        <div class="v_tB_brands">
            <div class="v_tB_brandSlideShow owl-carousel" id="v_tB_brandSlideShow">
                <div class="v_tB_perSlide">
                    <a href="">
                        <img src="images/justLogo/Dell.png" alt="">
                    </a>
                </div>
                <div class="v_tB_perSlide">
                    <a href="">
                        <img src="images/justLogo/Dell.png" alt="">
                    </a>
                </div>
                <div class="v_tB_perSlide">
                    <a href="">
                        <img src="images/justLogo/Dell.png" alt="">
                    </a>
                </div>

                <?php include 'loop_perItem.php'; ?>

            </div>
        </div>
        <div class="v_tB_filters">
            <div class="v_tB_one v_tB_tag">
                <label for="cars">Price Range:</label>
                <input id="price_min" class="v_tB_price" placeholder="Minimum">
                -
                <input id="price_max" class="v_tB_price" placeholder="Maxmimum">
            </div>

            <div class="v_tB_two v_tB_tag">
                <select name="v_tB_condition" id="v_tB_condition">
                    <option value="volvo">All Condition</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div>

            <div class="v_tB_three v_tB_tag">
                <label class="label_txt">All</label>
                <label class="switch">
                    <input type="checkbox" role="switch">
                    <span class="slider round"></span>
                </label>
                <label class="label_txt">Stock</label>
            </div>

        </div>
    </div>
    <div class="vendor_contentSpace">
        <div class="v_cS_perContent">
            <div class="v_cS_pCTitle">
                <span class="pcTitle_name">Dell Inspirion</span>
                <p>Intel core i7, Ram: 16GB, Display: 14.2 inch, ....... </p>
            </div>
            <div class="v_cS_btns">
                <div class="v_cS_hotTags">
                    <i class="fa-solid fa-fire-flame-curved" style="color: red;"></i>
                    <i class="fa-solid fa-droplet" style="color: green;"></i>
                    <i class="fa-solid fa-rocket" style="color: #4CB9EB;"></i>
                </div>
                <div class="v_cS_priceTag">$500</div>
                <div class="v_cS_qty">
                    <input type="text" name="" id="" value="1" placeholder="QTY">
                </div>
                <div class="v_cS_addToCart">
                    <button class="v_cS_addToCartBtn">Add To Cart</button>
                </div>
            </div>
        </div>

        <?php include 'loop_perContent.php'; ?>

        <div class="pagination_center">
            <div class="pagination">
                <a href="#">&laquo;</a>
                <a href="#">1</a>
                <a class="active" href="#">2</a>
                <a href="#">3</a>
                <a href="#">4</a>
                <a href="#">5</a>
                <a href="#">6</a>
                <a href="#">&raquo;</a>
            </div>
        </div>

    </div>
</div>