// login test for cypress

// open http://127.0.0.1:8000/login

describe ('Actions (Login tests)', () => {
    it ('login test (success)', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // type email
        cy.get('input[name=email]').type('admin@admin.com')

        // type password (password)
        cy.get('input[name=password]').type('password')

        // submit form (sign-in button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /home
        cy.url().should('include', '/home')
    })

    it ('login test (fail ( wrong password ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // type email (right)
        cy.get('input[name=email]').type('admin@admin.com')

        // type password (wrong)
        cy.get('input[name=password]').type('wrongpassword')

        // submit form (sign-in button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /login
        cy.url().should('include', '/login')

        // expect to have "These credentials do not match our records."
        cy.contains('These credentials do not match our records.')

    })

    it ('login test (fail ( wrong email ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // type email (wrong)
        cy.get('input[name=email]').type('wrong@admin.com')

        // type password (right)
        cy.get('input[name=password]').type('password')

        // submit form (sign-in button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /login
        cy.url().should('include', '/login')

        // expect to have "These credentials do not match our records."
        cy.contains('These credentials do not match our records.')
    })

    it ('login test (fail ( wrong email and password ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // type email (wrong)
        cy.get('input[name=email]').type('wrong@admin.com')

        // type password (wrong)
        cy.get('input[name=password]').type('wrongpassword')

        // submit form (sign-in button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /login
        cy.url().should('include', '/login')

        // expect to have "These credentials do not match our records."
        cy.contains('These credentials do not match our records.')
    })

    it ('login test (fail ( right email and SQL Injection ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // type email (right)
        cy.get('input[name=email]').type('admin@admin.com')

        // type password (SQL Injection)
        cy.get('input[name=password]').type('\' OR 1=1 --')

        // submit form (sign-in button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /login
        cy.url().should('include', '/login')

        // expect to have "These credentials do not match our records."
        cy.contains('These credentials do not match our records.')
    })

    it ('login test (fail ( right password and SQL Injection ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // type email (SQL Injection)
        cy.get('input[name=email]').type('\' OR 1=1 --')

        // type password (right)
        cy.get('input[name=password]').type('password')

        // submit form (sign-in button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /login
        cy.url().should('include', '/login')
    })
})
