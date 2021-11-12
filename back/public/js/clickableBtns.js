let clickableBtns = document.querySelectorAll(".clickable")
clickableBtns.forEach(btn => btn.onclick = (e) => {
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

    let promise = await fetch("goodsFilter")
    headers = {
        'X-CSRF-TOKEN': document.querySelector(".csrf_token").getAttribute("content")
    }
    console.log(headers)

});