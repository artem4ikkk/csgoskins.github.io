window.authGlobalTriggers = [
  'a:not([href^="/logout"])',
]

window.onAuthInit = function () {

}

window.defaultLang = 'en'

window.onChangeAuth = function () {
  const auth = JSON.parse(window.localStorage.getItem('auth'))
  auth && window.location.reload()
}