var all_questions = [];
$(function () {
    $('.bizsec__nav--slider .bizsec__nav__link a').click(function () {
        $('.bizsec__nav--slider .bizsec__nav__link a').removeClass('active');
        $(this).addClass('active');
        var data_category = $(this).attr('data-category');
        $('#accordionFAQs .accordion-item').hide();
        $('#accordionFAQs .accordion-item[data-category="' + data_category + '"]').show();
    });
    $('.bizsec__nav--slider .bizsec__nav__link a[data-category="General"]').trigger('click');

    $('.accordion-button').each(function () {
        all_questions.push(($(this).text()).trim());
    })

    autocomplete(document.getElementById('search_faqs'), all_questions);
})

function autocomplete(inp, arr) {
    var currentFocus;
    inp.addEventListener("input", function (e) {
        var a, b, i, val = this.value;
        var strIndex = 0;
        var tempSubString = '';
        var tempString = '';
        closeAllLists();
        if (!val) { return false; }
        currentFocus = -1;

        a = document.createElement("DIV");
        a.setAttribute("id", this.id + "autocomplete-list");
        a.setAttribute("class", "autocomplete-items");
        this.parentNode.appendChild(a);
        for (i = 0; i < arr.length; i++) {
            if ((arr[i].toUpperCase()).includes(val.toUpperCase())) {
                tempString = arr[i];
                strIndex = (arr[i].toUpperCase()).indexOf(val.toUpperCase());
                tempSubString = "<strong>" + arr[i].substr(strIndex, val.length) + "</strong>";
                tempString = tempString.replace(val, tempSubString);
                b = document.createElement("DIV");
                b.innerHTML = tempString;
                b.innerHTML += "<input type='hidden' value='" + arr[i] + "'>";
                b.addEventListener("click", function (e) {
                    let selectedVal = (this.getElementsByTagName("input")[0].value).trim();
                    selectAccordion(selectedVal);
                    inp.value = "";
                    closeAllLists();
                });
                a.appendChild(b);
            }
        }
    });

    inp.addEventListener("keydown", function (e) {
        var x = document.getElementById(this.id + "autocomplete-list");
        if (x) x = x.getElementsByTagName("div");
        if (e.keyCode == 40) {
            currentFocus++;
            addActive(x);
        } else if (e.keyCode == 38) {
            currentFocus--;
            addActive(x);
        } else if (e.keyCode == 13) {
            e.preventDefault();
            if (currentFocus > -1) {
                if (x) x[currentFocus].click();
            }
        }
    });

    function addActive(x) {
        if (!x) return false;
        removeActive(x);
        if (currentFocus >= x.length) currentFocus = 0;
        if (currentFocus < 0) currentFocus = (x.length - 1);
        x[currentFocus].classList.add("autocomplete-active");
    }

    function removeActive(x) {
        for (var i = 0; i < x.length; i++) {
            x[i].classList.remove("autocomplete-active");
        }
    }

    function closeAllLists(elmnt) {
        var x = document.getElementsByClassName("autocomplete-items");
        for (var i = 0; i < x.length; i++) {
            if (elmnt != x[i] && elmnt != inp) {
                x[i].parentNode.removeChild(x[i]);
            }
        }
    }
}

function selectAccordion(val) {
    $('.accordion-button').each(function () {
        if (($(this).text()).trim() == val) {
            var that = $(this);
            var data_category = that.parent().parent().attr('data-category');
            $('.bizsec__nav__link a[data-category="' + data_category + '"]').trigger('click');
            $('html, body').animate({ scrollTop: that.parent().offset().top - 100 }, 300);
            setTimeout(function () {
                that.trigger('click');
            }, 1000);
        }
    })
}