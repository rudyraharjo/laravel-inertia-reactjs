import React from 'react'

function UserIndex({users, create_url}) {
    // console.log(users)
    // console.log(create_url)
    return (
        <div>
            <h1>User Index</h1>
            {users.map((user)=>(
                <ul key={user.id}>
                    <li>{user.id} . {user.name}</li>
                </ul>
            ))}
        </div>
    )
}

export default UserIndex
