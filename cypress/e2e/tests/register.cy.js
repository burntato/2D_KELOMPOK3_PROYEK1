// login test for cypress

// open http://127.0.0.1:8000/login

// then click on the "register" link

describe ('Actions (Register tests)', () => {

    it ('register test (success)', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // click on the a button that says "Create new account"
        cy.get('a').contains('Create new account').click()

        // type name
        cy.get('input[name=name]').type('test')

        // type email
        cy.get('input[name=email]').type('test@email.com')

        // type password
        cy.get('input[name=password]').type('password')

        // repeat password
        cy.get('input[name=password_confirmation]').type('password')

        // submit form (Create account button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /home
        cy.url().should('include', '/home')
    })

    it ('register test (fail ( invalid Email ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // click on the a button that says "Create new account"
        cy.get('a').contains('Create new account').click()

        // type name
        cy.get('input[name=name]').type('test')

        // type email (invalid)
        cy.get('input[name=email]').type('testemail.com')

        // type password
        cy.get('input[name=password]').type('password')

        // repeat password
        cy.get('input[name=password_confirmation]').type('password')

        // submit form (Create account button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /register
        cy.url().should('include', '/register')
    })

    it ('register test (fail ( invalid password ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // click on the a button that says "Create new account"
        cy.get('a').contains('Create new account').click()

        // type name
        cy.get('input[name=name]').type('test')

        // type email
        cy.get('input[name=email]').type('test@email.com')

        // type password (invalid)
        cy.get('input[name=password]').type('pass')

        // repeat password
        cy.get('input[name=password_confirmation]').type('pass')

        // submit form (Create account button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /register
        cy.url().should('include', '/register')

        // expect to have "The password must be at least 8 characters."
        cy.contains('The password must be at least 8 characters.')
    })

    it ('register test (fail ( password confirmation ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // click on the a button that says "Create new account"
        cy.get('a').contains('Create new account').click()

        // type name
        cy.get('input[name=name]').type('test')

        // type email
        cy.get('input[name=email]').type('test@email.com')

        // type password
        cy.get('input[name=password]').type('password')

        // repeat password (invalid)
        cy.get('input[name=password_confirmation]').type('pass')

        // submit form (Create account button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /register
        cy.url().should('include', '/register')

        // expect to have "The password confirmation does not match."
        cy.contains('The password confirmation does not match.')
    })

    it ('register test (success ( name in numbers ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // click on the a button that says "Create new account"
        cy.get('a').contains('Create new account').click()

        // type name (invalid)
        cy.get('input[name=name]').type('123')

        // type email
        cy.get('input[name=email]').type('number@email.com')

        // type password
        cy.get('input[name=password]').type('password')

        // repeat password
        cy.get('input[name=password_confirmation]').type('password')

        // submit form (Create account button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /home
        cy.url().should('include', '/home')
    })

    it ('register test (fail everything ))', () => {

        // visit http://127.0.0.1:8000/login
        cy.visit('http://127.0.0.1:8000/login')

        // click on the a button that says "Create new account"
        cy.get('a').contains('Create new account').click()

        // type name (invalid)
        cy.get('input[name=name]').type('123')

        // type email (invalid)
        cy.get('input[name=email]').type('numberemail.com')

        // type password (invalid)
        cy.get('input[name=password]').type('pass')

        // repeat password (invalid)
        cy.get('input[name=password_confirmation]').type('pis')

        // submit form (Create account button)
        cy.get('button[type=submit]').click()

        // expect to be redirected to /register
        cy.url().should('include', '/register')
    })
})
