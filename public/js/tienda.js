let page=1;

function getCategorias(){

    let datos=[];

    $(".categoria:checked").each(function(){

        datos.push($(this).val());

    });

    return datos.join(",");

}

function getMarcas(){

    let datos=[];

    $(".marca:checked").each(function(){

        datos.push($(this).val());

    });

    return datos.join(",");

}

function cargarProductos(page=1){

    $("#loader").show();

    $("#contenedorProductos").hide();

    $.ajax({

        url:'/tienda/productos',

        data:{

            buscar:$("#buscar").val(),

            categorias:getCategorias(),

            marcas:getMarcas(),

            orden:$("#orden").val(),

            perPage:$("#perPage").val(),

            page:page

        },

        success:function(resp){

            $("#loader").hide();

            $("#contenedorProductos")
                .html(resp.html)
                .fadeIn(300);

            $("#contenedorPaginacion")
                .html(resp.pagination);

            $("#contadorProductos").html(

                "Mostrando "

                +resp.desde+

                " - "

                +resp.hasta+

                " de "

                +resp.total+

                " productos"

            );

            actualizarURL(page);

        }

    });

}

function actualizarURL(page){

    let url=new URL(window.location);

    url.searchParams.set(
        "buscar",
        $("#buscar").val()
    );

    url.searchParams.set(
        "categorias",
        getCategorias()
    );

    url.searchParams.set(
        "marcas",
        getMarcas()
    );

    url.searchParams.set(
        "orden",
        $("#orden").val()
    );

    url.searchParams.set(
        "page",
        page
    );

    history.pushState({},'',url);

}

let timer;

$("#buscar").keyup(function(){

    clearTimeout(timer);

    timer=setTimeout(function(){

        cargarProductos();

    },400);

});

$(document).on("change",".categoria",function(){

    cargarProductos();

});

$(document).on("change",".marca",function(){

    cargarProductos();

});

$("#orden").change(function(){

    cargarProductos();

});

$("#perPage").change(function(){

    cargarProductos();

});

$("#limpiarFiltros").click(function(){

    $(".categoria").prop("checked",false);

    $(".marca").prop("checked",false);

    $("#buscar").val("");

    $("#orden").val("recientes");

    $("#perPage").val("12");

    cargarProductos();

});

$(document).on(
    "click",
    ".pagination a",
    function(e){

        e.preventDefault();

        let page=$(this)
            .attr("href")
            .split("page=")[1];

        cargarProductos(page);

        $("html,body").animate({

            scrollTop:0

        },300);

});

$(function(){

    cargarProductos();

});