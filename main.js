import * as func from './comp.js';
func.echo();
const peter= new func.person("peter",21);
console.log(peter);
(function(){
	console.log("hi");
})