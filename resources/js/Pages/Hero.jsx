import React from 'react';
import { Table } from 'react-bootstrap';

export default function Hero({ heroes }) {

  const getDamage = (hero) => {
    if (!hero.weapons.length) return 0;

    return hero.weapons.reduce((prev, curr) => prev + curr.damage, 0)
  }

  const renderHeader = () => (
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Health</th>
        <th>Weapons</th>
        <th>Damage</th>
      </tr>
    </thead>
  )

  const renderBody = () => (
    <tbody>
      {
        heroes.map((hero, index) => (
          <tr key={hero.id}>
            <td>{index + 1}</td>
            <td>{hero.name}</td>
            <td>{hero.health}</td>
            <td>
              {
                hero.weapons.map((weapon, index) => (
                  <span
                    key={weapon.id}
                  >
                    {`${weapon.name}${hero.weapons[index + 1] ? ', ' : ''}`}
                  </span>
                ))
              }
            </td>
            <td>{getDamage(hero)}</td>
          </tr>
        ))
      }
    </tbody>
  )

  return (
    <Table striped bordered hover>
      {renderHeader()}
      {renderBody()}
    </Table>
  )
}
