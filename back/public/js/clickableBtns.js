let clickableBtns = document.querySelectorAll(".clickable")
clickableBtns.forEach(btn => btn.onclick = async e => {
    let btns = document.querySelectorAll(".clickable")
    btns.forEach(btt => {
        btt.classList.remove("black-text")
        btt.classList.remove("active-custom-btn")
        btt.classList.add('white-text')
        btt.classList.add("custom-btn")
    })
    e.target.classList.add("black-text")
    e.target.classList.add("active-custom-btn")
    e.target.classList.remove('white-text')
    e.target.classList.remove("custom-btn")
    let token = document.querySelector(".csrf_token").getAttribute("content");
    let testData = {
        headers: {
            "Content-Type": "application/json",
            "Accept": "application/json, text-plain, */*",
            "X-Requested-With": "XMLHttpRequest",
            "X-CSRF-TOKEN": token
        },
        method: 'post',
        body: JSON.stringify({
            "category_id": e.target.getAttribute("filter_data"),
        })
    }
    let promise = await fetch("/api/goodsFilter", testData)
    if (promise.ok) {
        let response = await promise.json()
        var goodsList = document.querySelector(".goods-list");
        goodsList.innerHTML = ""
        for (let i = 0; i < response.length; i++) {
            let additionalClass1 = ""
            let additionalClass2 = ""
            let invertionImageClass = ""
            if (i % 2 == 1) {
                additionalClass1 = "push-l6"
                additionalClass2 = "pull-l6"
            } else {
                additionalClass1 = ""
                additionalClass2 = ""
            }
            if (response[i].inverted_picture) {
                invertionImageClass = "inverted"
            } else {
                invertionImageClass = ""
            }

            goodsList.innerHTML += `<div class="row">
            <div class="col s12 m6 white-text ` + additionalClass1 + `">
            <div class="container">
            <h1>` + response[i].title + `</h1>
            <h6>
            ` + response[i].good_description + `
            </h6>
            <h4>Price: ` + response[i].price + `$</h4>
            <h4>Manufacturer: Scott Black</h4>
            <h4>Country: England</h4>
            <br />
            <a href="#" class="custom-btn white-text find-out-btn">
            Find out more!
            </a>
            </div>
            </div>
            <div class="col s12 m6 ` + additionalClass2 + `">
            <img src="storage/goodsImages/` + response[i].image_field + `" class="backpack-photo left ` + invertionImageClass + `" alt="" />
            </div>
            </div>`
        }
    }

});
