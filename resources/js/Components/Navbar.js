import React from 'react'
import Container from 'react-bootstrap/Container';
import Nav from 'react-bootstrap/Nav';
import RBNavbar from 'react-bootstrap/Navbar';

const Navbar = () => {
  return (
    <RBNavbar bg="primary" variant="dark">
      <Container>
        <RBNavbar.Brand href="#">Test Project</RBNavbar.Brand>
        <Nav className="me-auto">
          <Nav.Link href="/heroes">Heroes</Nav.Link>
          <Nav.Link href="/weapons">Weapons</Nav.Link>
        </Nav>
      </Container>
    </RBNavbar>
  )
}

export default Navbar
