import { useState, useEffect } from "react";
import { Link, useParams } from "react-router-dom";
import Col from "../components/Col"
import Row from "../components/Row"

function Note () {
  const params = useParams()
  const [note, setNote] = useState({
    title: '',
    text: ''
  })

  useEffect(() => {
    fetch('http://mtm6405-notes.test/api/notes/' + params.id)
      .then(response => response.json())
      .then(json => setNote(json))
  }, [])

  return (
    <>
      <Row className="row my-5 d-flex align-items-center">
          <Col className="col-9">
              <h1 className="display-4">{note.title}</h1>
          </Col>
          <Col className="col-3 text-end">
            <Link to={`/note/${note.id}/edit`} className="text-decoration-none text-body">Edit</Link>
          </Col>
      </Row>
      <Row>
        <Col>
          <p className="fs-4">{note.text}</p>
          <Link to="/" className="text-decoration-none">&lt; Back</Link>
        </Col>
      </Row>
    </>
  )
}

export default Note