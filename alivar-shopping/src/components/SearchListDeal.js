import React, {Component} from 'react';

class SearchListDeal extends Component {
    constructor(props){
        super(props);

        this.state = {

        }
    }


    render(){

        return (
            <div className="row">
                <div className="col-xs-12">
                    <div className="search-box">
                        <input type="text" name className="fas" placeholder=" Tìm kiếm" />
                        <button>
                        <i className="fas fa-search" />
                        </button>
                    </div>
                </div>
            </div>
        );
    }
}

export default SearchListDeal;
