window.addEventListener('resize', () => { 
	if (window.innerWidth > 900) {
		document.getElementById('navbar-menu').style.visibility = 'visible'; 
		document.getElementById('navbar-languages').style.visibility ='visible'; 
		
	} else {
		document.getElementById('navbar-menu').style.visibility = 'hidden'; 
		document.getElementById('navbar-languages').style.visibility = 'hidden'; 
		
	}
}) 

function navbarBtnClick(e) {
/*
gets menu 
if(isvisble) ? notvisible: visible 
*/
	const navbarMenuDisplay = document.getElementById('navbar-menu'); 
	const navbarLanguagesDisplay = document.getElementById('navbar-languages');

	if (navbarMenuDisplay.style.visibility === 'visible') {
		navbarMenuDisplay.style.visibility = 'hidden';  
		navbarLanguagesDisplay.style.visibility = 'hidden';
	} else {
		navbarMenuDisplay.style.visibility = 'visible';  
		navbarLanguagesDisplay.style.visibility = 'visible';
	}

}

/*
function showPrgmLanguages(e) {
	
	const languagesTitle = document.querySelector('.languagesTitle'); 
	languagesTitle.classList.add('languagesTitleHidden'); 
	languagesTitle.classList.remove('languagesTitle'); 
    

	let prgmLangsDivs = document.querySelectorAll('.languagesDivs'); 
	for (let index = 0; index < prgmLangsDivs.length; index++) {
		const element = prgmLangsDivs[index];
		element.style.visibility = 'visible'; 

	}
}



function hiddePgrmTitle(e) {

	const languagesTitle = document.querySelector('.languagesTitleHidden'); 
	languagesTitle.classList.remove('languagesTitleHidden'); 
	languagesTitle.classList.add('languagesTitle'); 
	

	let prgmLangsDivs = document.querySelectorAll('.languagesDivs'); 
	for (let index = 0; index < prgmLangsDivs.length; index++) {
		const element = prgmLangsDivs[index];
		element.style.visibility = 'hidden'; 
	}
	
}
*/
/*
function showFrameworks(e) {
	document.querySelector('#frameworksTitle').style.display = 'none'; 

	let framewokrsDivs = document.querySelectorAll('.frameworksDivs'); 
	for (let index = 0; index < framewokrsDivs.length; index++) {
		const element = framewokrsDivs[index];
		element.style.visibility = 'visible'; 
	}
}


function hideFrameworks(e) {
	document.querySelector('#frameworksTitle').style.display = 'flex'; 

	let framewokrsDivs = document.querySelectorAll('.frameworksDivs'); 
	for (let index = 0; index < framewokrsDivs.length; index++) {
		const element = framewokrsDivs[index];
		element.style.visibility = 'hidden';
	}
}
*/