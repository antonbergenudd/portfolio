var showDescription = false;

var bars = [{
    class:'css',
    knowledge:'100%',
    src:'css'
},{
    class:'angular',
    knowledge:'80%',
    src:'angular'
},{
    class:'html',
    knowledge:'100%',
    src:'html'
},{
    class:'phonegap',
    knowledge:'80%',
    src:'phonegap',
},{
    class:'sass',
    knowledge:'80%',
    src:'sass'
},{
    class:'github',
    knowledge:'40%',
    src:'github'
},{
    class:'jquery',
    knowledge:'80%',
    src:'jquery'
}];

var langDescription = function(lang) {

    switch(lang) {
        case 'css':
            activeLanguage = {
                name: 'CSS',
                shrt: 'Cascade Styling Sheet',
                knowledge: '100%',
                src: 'css'
            }
            break;
        case 'angular':
            activeLanguage = {
                name: 'AngularJS',
                shrt: '',
                knowledge: '80%',
                src: 'angular'
            }
            break;
        case 'html':
            activeLanguage = {
                name: 'HTML',
                shrt: 'Hyper Text Markup Line',
                knowledge: '100%',
                src: 'html'
            }
            break;
        case 'phonegap':
            activeLanguage = {
                name: 'Phonegap',
                shrt: '',
                knowledge: '80%',
                src: 'phonegap'
            }
            break;
        case 'sass':
            activeLanguage = {
                name: 'Sass',
                shrt: 'Super awesome styling sheet',
                knowledge: '80%',
                src: 'sass'
            }
            break;
        case 'github':
            activeLanguage = {
                name: 'Github',
                shrt: '',
                knowledge: '40%',
                src: 'github'
            }
            break;
        case 'jquery':
            activeLanguage = {
                name: 'jQuery',
                shrt: 'Javascript',
                knowledge: '80%',
                src: 'jquery'
            }
            break;
    };
};
