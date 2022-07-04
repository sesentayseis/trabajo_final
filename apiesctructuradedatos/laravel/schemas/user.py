def userEntity(item) -> dict:
    return {
        "id": str(item["_id"]),
        "nombre": item["nombre"],
        "precio": item["precio"],
        "stock": item["stock"],
    }

def usersEntity(entity) -> list:
    return [userEntity(item) for item in entity]

