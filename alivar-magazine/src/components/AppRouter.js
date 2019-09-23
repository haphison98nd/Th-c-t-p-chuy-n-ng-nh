import React, {Component} from 'react';
import { BrowserRouter as Router, Route, Link } from "react-router-dom";

class AppRouter extends Component {
    constructor(props){
        super(props);

        this.state = {
           
        }
        
    }
    render(){
        
        return (
            <Router>
                <div>
                    <nav>
                        <ul>
                            <li>
                                <Link to="./DetailNews">
                                    DetailNews
                                </Link>
                            </li>
                        </ul>
                    </nav>
                    <Route path="./DetailNews" component={DetailNews} />
                </div>
            </Router>
        );
    }
}

class DetailNews extends Component{
    render(){
        return <h2> DetailNews </h2>;
    }   
}

export default AppRouter;
