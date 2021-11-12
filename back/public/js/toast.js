var cartBtn = document.querySelector(".submit-promo-btn")

cartBtn.onclick = async(e) => {
    url = 'api/addToCart';
    var item_id = e.target.getAttribute("itemId");
    let token = document.querySelector(".csrf_token").getAttribute("content");
    let requestData = {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: JSON.stringify({
            "category_id": item_id,
        })
    }
    let promise = await fetch(url, requestData);
    let data = await promise.json();
    console.log(data);
    M.toast({ html: data });

}
