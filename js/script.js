$(function(){
//    1- content & attribute

//  1-1 attr()  get & set 
// console.log($('#h').attr('id' , 'change_id'));

//  1-2 attrRemove()
// $('h1').removeAttr('id')

//  1-3 html  
// $('h1').html('<span>content from jquery</span>')

//  1-4 text 
// $('h1').text('<span>content from jquery</span>')
// var heading = $('h1').text();
// alert(heading)

//  1-5 val()
// console.log($('#input').val(""))

//  1-6 create element   $('<tag></tag>')
// var mySpan = $('<span></span>').text('content span from jquery');
// $('#h').before(mySpan);

//  1-7 append  
// $('element').append()


//  1-8 prepend 

//  1-9 after 

//  1-10 before 


//    2- css 


// 2-1 addClass()

//  2-2 removeClass()

//  2-3 toggleClass()


// $('button').on('click',function(){

//     $('#h').toggleClass('bg')

// })


// 2-4 css()

// $('#h').css("background-color","blue")  // one propert syntax


// $('#h').css({                        // more than one property
//     "background-color":"green",
//     "color":"white" 
//             })



//  2-5 width()
//  2-6 height()
//  2-7 innerWidth
//  2-8 outterWidth

// $('#h').width(100)
// $('#h').height(500)


//    3- traversing (DOM)

//   ancestor الآباء
//   descendant  الابناء
//  siblings  الاشقاء

// 3-1 parent()    return direct parent 
// 3-2 parents()   returen all parents
//  3-3 parentsUntil()

// 3-4 children()
//  3-5 siblings()

//  3-6 eq(index)

// var a = $('div').eq(1);

// a.css('background',"red")

//  3-7 remove() remove element

// $('div').eq(1).empty();


//  3-8 empty() remove content inside element


//    4- event 


// $('button').click( function(){

//     $('#h').css("background-color","blue");

// } )



// $('button').click( function(){

//     $('#h').css("background-color","blue");

// } )


// $('button').trigger('click')

// $('button').on('dblclick click', function(e){
//     $('#h').css("background-color","blue");
//     console.log(e)

// })


// $('#reset').on('click',function(a){

//         a.preventDefault();
// })





//    $('#addNew').on('click',function(){
//
//        if( $('#input').val() !== ""){
//            var inputTask =  $('#input').val();
//            var mynewtask = $('<li></li>').text(inputTask);
//            $('ol').append(mynewtask);
//            $('#input').val("");
//            $('p').empty();
//
//
//            $('ol li').on('dblclick',function(){
//                $(this).remove();
//            })
//        }
//        else{
//            $('p').text('please add your task');
//        }
//
//        
//    })
//    5- effects
    

})