// Kevin Eduardo Mazariegos    <-KeeD->
// Script de Test de Seguridad

describe('Test de funcionalidad - Administrador para confirmar permiso', () => {
    
	it('conectando con localhost y el proyecto', () => {
        cy.visit('http://localhost/P_Online/admin/index.php'); // carga el proyecto en localhost
		cy.wait(1000);
    })
	
	// Se intenta hacer login con datos inexistentes en la BD
	/*it('Request - login usuario X', () => {
		
		//se envía el valor de usuariox como nombre de usuario
		cy.get('#inp1').type('usuariox') 
		//se envía el valor de password123 como Password de usuario
		// la propiedad {enter} equivale a un enter para envío de datos
		cy.get('#inp3').type('password123{enter}')
		
		})

		// Se intenta hacer login una inyección de SQL básico
	it('Request - login inyección SQL Básico', () => {
		
		cy.get('#inp1').type('administrador')
		
		cy.get('#inp3').type('" or ""={enter}')
		
		})
	
	// Se intenta hacer login con datos existentes en la BD
	it('Request - login Docente', () => {
		
		cy.get('#inp1').type('091811017')

		cy.get('#inp3').type('123456{enter}')
		
		})
	it('Request - Aceptar el permiso sin dar una observación', () => {
		cy.get('#inp1').type('{enter}')
		cy.wait(1000);
		})

	it('Request - Aceptar observación', () => {
		cy.get('#inp1').type('es el primer permiso')
		cy.get('#inp2').click()
		})*/
	it('Request - Aceptar el permiso sin dar una observación', () => {
		cy.get('#inp1').type('{enter}')
		cy.wait(1000);
		})

	it('Request - Aceptar permiso con observación', () => {
		cy.get('#inp1').type('es el primer permiso')
		cy.get('#inp2').click()
		cy.wait(1000);
		})

	it('Request - Visualizar el foro', () => {
		cy.get('#inp3').click()
		})
})