import React from 'react';
import { Table } from 'react-bootstrap';

export default function Weapon({ weapons }) {

  console.log(weapons, 'weapons');

  const renderHeader = () => (
    <thead>
      <tr>
        <th>#</th>
        <th>Name</th>
        <th>Damage</th>
        <th>Is Range</th>
        <th>Used By Hero</th>
      </tr>
    </thead>
  )

  const renderBody = () => (
    <tbody>
      {
        weapons.map((weapon, index) => (
          <tr key={weapon.id}>
            <td>{index + 1}</td>
            <td>{weapon.name}</td>
            <td>{weapon.damage}</td>
            <td>{weapon.is_range ? 'true' : 'false'}</td>
            <td>{weapon.hero_id ? 1 : 0}</td>
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
