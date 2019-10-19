// function save() {

//     var div = document.getElementById("ft_list").innerHTML;
//     var value = JSON.stringify(div);
//     document.cookie = "save=", value;
//     return false;
// }

// function getcook {
//     ft_list=document.getElementById("ft_list");
//     var tmp = document.cookie;
//     if(tmp) {
//         cookie = JSON.parse(tmp);
//         cookie.forEach(function(name) {
//             AddElem(name);
//         });
//     }
//     return false;
// }

// var ft_list;
// var cookie = [];
// ​
// window.onunload = function () {
//     var todo = ft_list.children;
//     var newCookie = [];
//     for (var i = 0; i < todo.length; i++)
//         newCookie.unshift(todo[i].innerHTML);
//     document.cookie = JSON.stringify(newCookie);
// };
// ​
// //onload
// function getcook()
// {
// 	ft_list = document.getElementById("ft_list");
// 	var tmp = document.cookie;
// 	if (tmp) {
//         cookie = JSON.parse(tmp);
//         cookie.forEach(function (name) {
//             add_list(name);
//         });
//     }	
// }

function add_list() {

var text = prompt('What to do?', '');
var corob = document.getElementById("ft_list");
var oneListA = document.createElement("div");
oneListA.setAttribute("class", "list");
oneListA.innerHTML = text;
corob.insertBefore(oneListA, corob.firstChild);

var butRem = document.createElement("input");
butRem.setAttribute("onclick", "remove(this)");
butRem.setAttribute("type", "button");
butRem.setAttribute("value", "✖")
oneListA.append(butRem);
}

function remove(elem)
{
    if (confirm("Delete this?"))
        elem.parentNode.remove();
}
