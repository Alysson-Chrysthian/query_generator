document.addEventListener('DOMContentLoaded', () => {
    const form = document.querySelector('form')

    form.addEventListener('submit', (e) => {
        e.preventDefault()
        fetch('/generate-query', {
            method: 'POST',
        })
        .then(data => data.text())
        .then(data => {
            console.log(data)
        })
    })
})