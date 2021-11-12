var cartBtn = document.querySelector(".submit-promo-btn")

cartBtn.onclick = async(e) => {
    url = 'api/addToCart';
    var item_id = e.target.getAttribute("itemId")
    M.toast({ html: 'Added to your cart!' })
}
