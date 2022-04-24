const afterClick = $("#result-search-aft-right");
const befSearch = $("#result-search-bef");
const aftSearch = $("#result-search-aft");
const keyword = $("#info");
const domisili = $("#domisili")
const menulist = document.getElementById("menulist");
const cari = $('#cari')
const searchBox = $('#search-box')
const form = $("#form");
const dashboard = $("#dashboard");
const select1 = $(".select1");
const select2 = $(".select2");
const buttonComp = $("#button-company")
const buttonResume = $(".button-resume")

dashboard.hide()
form.hide()
select1.click(function(event){
    select2.removeClass('active')
    $(this).addClass('active')
    dashboard.show()
    form.hide()
    event.preventDefault()
})
select2.click(function(event){
    select1.removeClass('active')
    $(this).addClass('active')
    dashboard.hide()
    form.show()
    event.preventDefault()
})


menulist.style.maxHeight = "0px";

function togglemenu(){
    if(menulist.style.maxHeight == "0px")
    {
        menulist.style.maxHeight = "130px";
    }
    else
    {
        menulist.style.maxHeight = "0px";
    }
}

function k(){
    let input = $(this).val()

        if(input != ''){
            $.ajax({
                url:"ajax/show-job.php",
                method:"POST",
                data:{input:input},

                success:function(data){
                    aftSearch.show()
                    $("#result-search-aft-right").html(data)
                    befSearch.hide()
                }
            })
        } else {
            aftSearch.hide()
            befSearch.show()
        }
    }
    function l(){
        let input = $(this).val()

        if(input != ''){
            $.ajax({
                url:"ajax/show-job.php",
                method:"POST",
                data:{domisili:input},

                success:function(data){
                    aftSearch.show()
                    $("#result-search-aft-right").html(data)
                    befSearch.hide()
                }
            })
        } else {
            aftSearch.hide()
            befSearch.show()
        }
    }
    

    $(document).ready(function(){
        
    searchBox.click(function(){
        location.href = "jobs.php"
    })
        
        keyword.keyup(k);
        
        domisili.keyup(l);

    cari.click(function(event){
        event.preventDefault()
    })
    buttonComp.click(function(){
        location.href = "undercons.php"
    })
    buttonResume.click(function(){
        $(this).after(location.href="undercons.php")
    })

})